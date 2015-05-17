# CSS

Contents:

- [Overview](#Overview)
- [Selectors](#Selectors)
- [Properties](#Properties)
- [Units](#Units)
- [Box Model](#Box Model)
- [Include CSS](#Include CSS)


<a name="Overview"/>

## Overview
+ CSS defines appearance of page
+ composed of rules
  - each rule has a selector and some declarations
  - example
  
```css 
header{
  color: blue;
  font-family: Verdana, sans-serif;
}
```

<a name="Selectors"/>

## Selectors
+ basic
  - select by tag name: `header{declarations}`
  - select by name: `.name{declarations}`
  - select by id: `#id{declarations}`
  - select by attribute value: `[attribute="value"]{declarations}`
  - combine selectors: `p.alert a {color: blue}`
  - select by descendants `foo bar {declarations}`
  - right-angle bracket to select child rather than descendant `ul.fruits > li {color: blue}`

+ pseudo-class
  - elements can be selected by current state
  - common used pseudo-classes
    + `foo:first-child`: first child of its parent
    + `foo:last-child`: last child of its parent
    + `foo:empty`: elements with no children
    + form elements
      - `input:checked`
    + hyperlink elements
      - `a:link`: all hyperlinks not visited
      - `a:visited`
    + interactive elements
      - `foo:active`: elements being pressed on
      - `foo:hover`: elements being hovered over
      - `foo:focus`: elements that are selected


<a name="Properties"/>

## Properties
+ common used properties
  - `background-image`
  - `background-color`
  - tables
    + `border-collapse`
  - `border` and `border-radius`
  - `float: left/right` and `clear:both`
  - `cursor:pointer`
  - `font`
  - `list-style-type`
  - `text-align`
  - `display`


<a name="Units"/>

## Units

<a name="Box Model"/>

## Box Model

<a name="Include CSS"/>

## Include CSS
+ load external stylesheets
  - `<link rel="stylesheet" type="text/css" href="path/to/stylesheet.css"/>`
+ embed stylesheets in the document
  ```
     <style type="text/css">
     styles{
        go : here;
     }
     </style>
  ```
+ inline styles using style attribute
  - `<p style="color:red">Content</p>`   




