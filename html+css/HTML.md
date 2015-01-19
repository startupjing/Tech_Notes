# HTML

Contents:

- [Basic Structure](#Basic Structure)
- [Common Tags](#Common Tags)
- [Forms](#Forms)

<a name="Basic Structure"/>

## Basic Structure
+ structure
```
	<!DOCTYPE html>
	<html>
	  <head>
	  	<title>My page</title>
	  </head>
	  <body>
	  	<p>Hello World</p>
	  </body>
	</html>
```
+ tags 
  - `<tagname>Contents</tagname>`
  - void element: `<tagname />`
  - optional closing tag: <p>, <tbody>, <li>
+ attributes
  - `<tag attribute="value">Content</tag>`
  - `<tag attribute="value" />


<a name="Common tags"/>

## Common Tags
+ semantic elements
  - `<header>` and `<footer>`
  - `<nav>`
  - `<article>`
  - `<section>`
  - `<figure>` and `<figcaption>`
  - `<form>`
    - `<input type="text/number/date/radio/etcetera" name="name"/>`
    - `<label for="input-id">`
    - `<select name="name">` and <option value="value">`
    - `<textarea name="">`

+ external media 
  - `<iframe src="source">`
  - `<link rel="what" type="mine" href="source">`
  - `<img src="source" alt="text"/>`
  - `<audio>`, `<video>`
  - `<canvas>`

+ outlining
  - `<h1>` to `<h6>`
  - `<p>`
  - dictionary list `<dl>`
    + dictionary term `<dt>`
    + dictionary definition `<dd>`
  - table `<table>`
    + heading `<thead>`, body `<tbody>`, footer `<tfoot>`
    + row `<tr>`
      - cell with heading `<th>`
      - cell with data `<td>`
  - list `<li>`, `<ol>` and `<ul>`
  - quotation `<q>` and `<blockquote>`


+ other
  - hyperlink `<a href="destination">`
  - line break `<br />
  - `<button>`
  - `<code>`
  - `<output>`
  - `<script>`
  - styling `<div>` and `<span>`


<a name="Forms"/>

## Forms
+ example
  ```
    <form action="http://example.com/search" method="GET">
    	<label>Search: <input type="text" name="q" /></label>
    	<input type="submit" value="search"/>
    </form>
  ```
+ HTTP request method
  - GET: transfer variables in the URL
  - POST: transfer variables as an HTTP header
  - how to choose
    + if user wants to bookmark web page, use GET
    + if transmit sensitive information, use POST
    + if transmit large data, use POST
    + if information from the form modifies database, use POST

+ input type
  - `hidden`: pass variable without user input
  - `password`: allow text to be hidden while typing
  - `number`: content is numerical, can set up `step`, `min`, `max`
  - `checkbox`: yes or no checkbox
  - `radio`: multiple choices
  - `file`: allow file uploads








