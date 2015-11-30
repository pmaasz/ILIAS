<?php
/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see docs/LICENSE */

/**
* Accomodations listener. Listens to events of other components.
*
* @author Jörg Lützenkirchen <luetzenkirchen@leifos.com>
* @version $Id$
* @ingroup ServicesAccomodations
*/
class ilAccomodationsAppEventListener
{	
	static function handleEvent($a_component, $a_event, $a_parameter)
	{
		include_once "Services/Accomodations/classes/class.ilAccomodations.php";
		global $ilUser;
				
		if($a_component == "Modules/Course")
		{
			$crs_obj_id = $a_parameter["obj_id"];						
			if(!$crs_obj_id)
			{
				return;
			}
			
			// gev-patch start
			$usr_id = (int)$a_parameter["usr_id"];
			if ($usr_id) {
				require_once("Services/GEV/Utils/classes/class.gevObjectUtils.php");
				require_once("Services/CourseBooking/classes/class.ilCourseBookings.php");
				$bookings = ilCourseBookings::getInstanceByRefId(gevObjectUtils::getRefId($crs_obj_id));	
				// This will be handled by CourseBooking-Service to avoid premature removal
				// from overnights for people on the waiting list.
				if ($bookings->isMemberOrWaiting($usr_id)) {
					return;
				}
			}
			// gev-patch end
			
			switch($a_event)
			{				
				case "addParticipant":			
					$usr_id = (int)$a_parameter["usr_id"];
					if($usr_id)
					{
						$acco = self::initAccomodations($crs_obj_id);			
						$nights = $acco->getPossibleAccomodationNights();
						
						array_shift($nights);
						array_pop($nights);
						
						$acco->setAccomodationsOfUser($usr_id, $nights);
					}
					break;
								
				case "deleteParticipant":		
					$usr_id = (int)$a_parameter["usr_id"];
					if($usr_id)
					{
						$acco =	self::initAccomodations($crs_obj_id);			
						$acco->deleteAccomodations($usr_id);		
					}
					break;		
				
				case "delete":									
					ilAccomodations::deleteByCourse($crs_obj_id);							
					break;	
			}								
		}
	}
	
	protected static function initAccomodations($a_crs_obj_id)
	{
		$crs_ref_id = array_pop(ilObject::_getAllReferences($a_crs_obj_id));
		
		include_once "Modules/Course/classes/class.ilObjCourse.php";
		include_once "Services/Accomodations/classes/class.ilAccomodations.php";		
		return ilAccomodations::getInstanceByRefId($crs_ref_id);			
	}
}