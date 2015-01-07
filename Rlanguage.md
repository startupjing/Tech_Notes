# R Programming Language

Contents:

- [Data Types](#Data Types)
- [Reading Data](#Reading Data)
- [Subsetting](#Subsetting)

<a name="Data Types"/>

## Data Types

### R Objects and Attributes
+ Atomic classes of objects
  - character 
  - numeric
  - integer
  - complex
  - logical
+ Most Basic Objects
  - vector: only contain objects of the same class
  - list: contain objects of different classes
+ Numbers
  - usually treated as double precision real numbers
  - specify **L** suffix to get integer (i.e.`1L` gives integer 1)
  - special number: Inf, NaN
+ Attributes
  - examples: names, dimnames, dimensions, class, length, user-defined metadata
  - accesss using `attributes()` function

### Vectors 
+ creating vectors
  - use `c()` function: `x<-c(1,2,3)`
  - use `vector()` function: `x<-vector("numeric",length=10)`
+ mixing objects
  - coercion such that each element is of the same class; nonsensical coercion results in NA
  - explicit coercion: `as.numeric(x)`, `as.logical(x)`, or `as.character(x)`

### Lists
+ creating lists
  - use `list()` function: `x<-list(1,"a",TRUE,1+4i)`

### Matrices
+ creating matrix
  - initialize: `m<-matrix(nrow=2,ncol=3)`
  - construct column-wise: `m<-matrix(1:6, nrow=2, ncol=3)`
  - create from vector by adding dimension: `m<-1:10` and `dim(m)<-c(2,5)`
+ attributes
  - `attributes(m)`
  - `dim(m)`
+ binding vectors
  - column-binding: `cbind(x,y)`
  - row-binding: `rbind(x,y)`

### Factors
+ creating factors
  - default level: `x<-factor(c("yes","no","yes"))`
  - change order of level: `x<-factor(c("yes","no","yes"), levels=c("yes","no"))`
+ display
  - `table(x)`
+ unclass
  - `unclass(x)`

### Missing Values
+ properties
  - NA values have a class(i.e. integer NA, character NA, etc)
  - NaN value is also NA but the converse is not true
+ testing 
  - test NA: `is.na()`
  - test NaN: `is.nan()`

### Data Frames
+ creating data frames
  - `read.table(file.txt)` or `read.csv(file.csv)`
  - `x<-data.frame(foo=1:4,bar=c(T,T,F,F))`
+ attributes
  - `nrow(x)` and `ncol(x)`

### Names
+ names for vectors
  - `x<-1:3` and `names(x)<-c("foo","bar","norf")`
  - `names(x)`
+ names for lists
  - `x<-list(a=1, b=2, c=3)`
+ names for matrices
  - `m<-matrix(1:4, nrow=2, ncol=2)` and `dimnames<-list(c("r1","r2"), c("c1","c2"))`

<a name="Reading Data"/>

## Reading Data

### Reading Tabular Data
+ reading data
  - tabular data: `read.table`, `read.csv`
  - reading lines: `readLines`
  - reading in R code files: `source`, `dget`
  - reading in saved workspace: `load`
+ writing data
  - `write.table`
  - `writeLines`
  - `dump`
  - `dput`
  - `save`
+ reading files with `read.table`
  - file or connection: `file`
  - if file has a header line: `header`
  - how column separated: `sep`
  - class of each column: `colClasses`
  - number of rows: `nrows`
  - comment character: `comment.char`
  - number of lines to skip: `skip`
  - if character will be coded as factors: `stringsAsFactors`

### Reading Large Table
+ use `colClasses` argument
  - read some lines: `initial<-read.table("file.txt", nrows=100)`
  - find class: `classes<-sapply(initial,class)`
  - set colClasses value: `tabAll<-read.table("file.txt", colClasses=classes)`
+ set nrows
  - use Unix tool `wc` to count number of lines in the file
+ compute memory requirement
+ set `comment.char=""` if no commented lines

### Textual Data Formats
+ dput and dget R objects
  - `y <- data.frame(a=1,b="a")` and `dput(y, file="y.R")`
  - `new.y <- dget("y.R")` and `new.y`
+ dump R objects
  - `x <- "foo"` and `y<-data.frame(a=1, b="a")`
  - `dump(c("x","y"), file="data.R")`
  - `rm(x,y)` and `source("data.R")`

### Connections
+ connection interfaces
  - file: `file`
  - compressed file with gzip: `gzfile`
  - compressed file with bzip2: `bzfile`
  - webpage: `url`
+ file connections
  - check attributes: `str(file)`
  - same as `data <- read.csv("foo.txt")`: `con<-file("foo.txt","r")`, `data<-read.csv(con)`, and `close(con)`
+ read lines
  - make connections: `con <- gzfile("words.gz")` or `con<-url("http://www.jhsph.edu","r")`
  - reading lines: `x <- readLines(con, 10)`

<a name="Subsetting"/>

## Subsetting

### Operators
+ `[` returns an object of the same class; can select multiple objects
+ `[[` extracts elements of a list or a data frame; returns a single element
+ `$` extracts elements of a list or data frame by names

### Lists
+ Basic
  - `x <- list(foo=1:4, bar=0.6)`
  - `x[1]`, `x[[1]]`, `x$bar`, `x[["bar"]]`, `x["bar"]`
+ Select multiples objects
  - `x <- list(foo=1:4, bar=0.6, baz="hello")`
  - `x[c(1,3)]`
+ Using computed indices with `[[`
  - `x <- list(foo=1:4, bar=0.6, baz="hello")`
  - `name <- "foo"` and `x[[name]]`
  - need `x$foo` not `x$name`
+ `[[` can take an integer sequence
  - `x <- list(a=list(10,12,14), b=c(3.14, 2.8))`
  - `x[[c(1,3)]]` same as `x[[1]][[3]]` gives 14

### Matrix
+ Use (i,j) type indices
  - `x <- matrix(1:6, 2, 3)`
  - element at (i,j): `x[2, 1]`
  - row or column: `x[1, ]` or `x[, 2]`
+ Return elements as matrix
  - `x[1, 2, drop=FALSE]`
  - `x[1, , drop=FALSE]`

### Partial Matching
+ Use `[[` or `$`
  - `x <- list(aardvark=1:5)`
  - `x$a`
  - `x[["a", exact=FALSE]]`

### Remove missing values
+ Single objects
  - `x <- c(1, 2, NA, 4, NA, 5)`
  - `bad <- is.na(x)` and `x[!bad]`
+ Multiple objects
  - `x <- c(1,2,NA,4,NA,5)` and `y <- c("a","b",NA,"d",NA,"f")`
  - `good <- complete.cases(x,y)` and `x[good]`, `y[good]`
+ Data frame
  - `good <- complete.cases(airquality)`
  - `airquality[good, ][1:6, ]`
