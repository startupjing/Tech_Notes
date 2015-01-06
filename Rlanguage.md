# R Programming Language Cheatsheet

Contents:
*[Data Types](#Data Types)
*[Reading Data](#Reading Data)


<a name="Data Types"/>

## Data Types

### R Objects and Attributes
1. Atomic classes of objects

* character
* numeric
* integer
* complex
* logical

2. Most Basic Objects

* vector: only contain objects of the same class
* list: contain objects of different classes

3. Numbers

* usually treated as double precision real numbers
* specify **L** suffix to get integer (i.e.`1L` gives integer 1)
* special number: Inf, NaN

4. Attributes

* examples: names, dimnames, dimensions, class, length, user*defined metadata
* accesss using `attributes()` function

### Vectors 
1. creating vectors

* use `c()` function: `x<*c(1,2,3)`
* use `vector()` function: `x<*vector("numeric",length=10)`

2. mixing objects

* coercion such that each element is of the same class; nonsensical coercion results in NA
* explicit coercion: `as.numeric(x)`, `as.logical(x)`, or `as.character(x)`

### Lists
1. creating lists

* use `list()` function: `x<*list(1,"a",TRUE,1+4i)`

### Matrices
1. creating matrix

* initialize: `m<*matrix(nrow=2,ncol=3)`
* construct column*wise: `m<*matrix(1:6, nrow=2, ncol=3)`
* create from vector by adding dimension: `m<*1:10` and `dim(m)<*c(2,5)`

2. attributes

* `attributes(m)`
* `dim(m)`

3. binding vectors

* column*binding: `cbind(x,y)`
* row*binding: `rbind(x,y)`

### Factors
1. creating factors

* default level: `x<*factor(c("yes","no","yes"))`
* change order of level: `x<*factor(c("yes","no","yes"), levels=c("yes","no"))`

2. display

* `table(x)`

3. unclass

* `unclass(x)`

### Missing Values
1. properties

* NA values have a class(i.e. integer NA, character NA, etc)
* NaN value is also NA but the converse is not true

2. testing

* test NA: `is.na()`
* test NaN: `is.nan()`

### Data Frames
1. creating data frames
* `read.table(file.txt)` or `read.csv(file.csv)`
* `x<*data.frame(foo=1:4,bar=c(T,T,F,F))`
2. attributes
* `nrow(x)` and `ncol(x)`

### Names
1. names for vectors

* `x<*1:3` and `names(x)<*c("foo","bar","norf")`
* `names(x)`

2. names for lists
* `x<*list(a=1, b=2, c=3)`
3. names for matrices
* `m<*matrix(1:4, nrow=2, ncol=2)` and `dimnames<*list(c("r1","r2"), c("c1","c2"))`

<a name="Reading Data"/>

## Reading Data

### Reading Tabular Data
1. reading data
* tabular data: `read.table`, `read.csv`
* reading lines: `readLines`
* reading in R code files: `source`, `dget`
* reading in saved workspace: `load`
2. writing data
* `write.table`
* `writeLines`
* `dump`
* `dput`
* `save`
3. reading files with `read.table`
* file or connection: `file`
* if file has a header line: `header`
* how column separated: `sep`
* class of each column: `colClasses`
* number of rows: `nrows`
* comment character: `comment.char`
* number of lines to skip: `skip`
* if character will be coded as factors: `stringsAsFactors`

### Reading Large Table
1. use `colClasses` argument
* read some lines: `initial<*read.table("file.txt", nrows=100)`
* find class: `classes<*sapply(initial,class)`
* set colClasses value: `tabAll<*read.table("file.txt", colClasses=classes)`
2. set nrows
* use Unix tool `wc` to count number of lines in the file
3. compute memory requirement
4. set `comment.char=""` if no commented lines

