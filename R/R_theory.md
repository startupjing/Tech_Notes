# Theory in R

Contents:

- [Scoping Rules](#Scoping-Rules)


<a name="Scoping-Rules"/>

## Scoping Rules

### symbol binding
+ bind a value to a symbol
  - get search list: `search()`
  - search the global environment for symbol name 
  - then search the namespaces of each package
+ search list
  - global environment first and base package last
  - order by the order of loading library positioning after global environment
  - R has separate namespaces for functions and non-functions

### rules
  + determine how a value is associated with a free variable in a function
  + R uses lexical scoping or static scoping

### lexical scoping
  + `f <- function(x,y){ x+y/z }`
  + z is free variable, not formal arguments nor local variable
  + values of free variables are searched for in the environment in which the function is defined

### dynamic scoping
  + value of variable is looked up in the environment from which the function is called
  + calling environment in R: parent frame
  + when function defined and called in global environment, defining and calling environment are the same
  
### environment
  + basic
    - a collection of (symbol, value) pairs
    - every environment has a parent environment
    - environment can have multiple children
    - only environment without a parent is the empty environment
    - function+its environment = a closure or function closure
  + information
    - get function's environment: `ls(environment(function))`
    - get value of variable in environment: `get("variable name", environment(function))`
    
### searching for free variable
  + if not found in the environment where function defined, search for parent environment
  + search continues until hit the top-level environment, usually the global environment or the namespace of a package
  + after top-level environment, continue to search until hit the empty environment
  + if still not found, throw an error
