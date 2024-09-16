<?php

/**
 * @package     EventCalendar
 * @subpackage  com_eventcalendar
 * @copyright   Copyright (C) 2024 CMExension
 * @license     GNU General Public License version 2 or later
 */

namespace CMExtension\Component\EventCalendar\Administrator\Helper;

use stdClass;

\defined('_JEXEC') or die;

/**
 * Functions for event.
 *
 * @since  0.0.2
 */
class EventHelper
{
    /**
     * Convert PHP object to vkurko/calendar's Event object.
     *
     * @param   object  $event  Event PHP object
     *
     * @return  object  PHP object but with's JavaScript object properties
     *
     * @since   0.0.2
     */
    public static function convertToJSObject($event)
    {
        $newObj                     = new \stdClass;
        $newObj->allDay             = $event->all_day;
        $newObj->start              = $event->start_time;
        $newObj->end                = $event->end_time;
        $newObj->title              = $event->name;
        $newObj->backgroundColor    = $event->background_color;
        $newObj->textColor          = $event->text_color;
        $newObj->classNames         = $event->class_names;
        $newObj->styles             = $event->styles;

        return $newObj;
    }
}
