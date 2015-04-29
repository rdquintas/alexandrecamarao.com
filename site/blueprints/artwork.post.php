<?php if(!defined('KIRBY')) exit ?>

title: Artwork entry
pages: true
files: true
fields: 
  title:
    label: Title
    type:  text
  year:
    label: Year
    type:  date
    format: YYYY
  tags:
    label: Tags
    type:  tags
    default: drawing,painting,photograph,video,sound
  text:
    label: Description
    type:  textarea
