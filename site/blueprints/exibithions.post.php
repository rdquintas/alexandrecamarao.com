<?php if(!defined('KIRBY')) exit ?>

title: Exibithion entry
pages: true
files: true
fields: false
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
    default: solo,group
  text:
    label: Description
    type:  textarea
