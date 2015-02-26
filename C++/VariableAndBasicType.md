
# Variable and Basic Types

## Primitive Build-in Type
  - arithmetic types
    + two categories: integral types(character adn boolean) and floating-point types
    + integral type
      - a `char` is the same size as a single machine byte
    + floating-point type
      - single, double, and extended-precision values
    + signed and unsigned type
## Type Conversions
  - happen automaticallly when use an object of one type where an object of another type is expected
  - some rules
    + 0 for false, otherwise for true
    + assign floats to integer, values truncated
    + assign out-of-range value to unsigned type, result is the remainder of the value modulo the number of vlaues the target type can hold
    + assign out-of-range value to signed type, result is undefined
  - literals
    + form and value of a literal determine its type
    + integer and floating-point literals
      - decimal, octal, hexadecimal notation
      - type of integer literal depends on its value and notation
    + character and character string literals
      - literal of type `char`: a character enclosed within single quotes
      - string literal: zero or more characters enclosed in double quotation; array of constant chars
      - compiler appends null character(`\0`) to every string literal, so actual size of a string literal is one more than its apparent size
      - two string literals that appear adjacent to one another and that are separated only by spaces, tabs, or newlines are concatenated into a single literal
    + escape sequence
    + specify the type of a literal
    + literals of type bool: true and false
    + pointer literal: `nullptr`
## Variables
  - type determines the size and layout of variable's memory, range of values, and set of operations
  - variable definition
    + type specifiers + list of variable names
  - initializers
    + list initialization
    + default initialization 
      - variables of built-in type defined inside a function are uninitialized
      - value of an unitialized variable of built-in type is undefined
  - variable declarations and definitions
    + declaration 
      - makes a name known to the program
      - a file that wants to use a name defined elsewhere includes a declaration for that name
      - specifies the type and the variable name
    + definition
      - creates the associated entity
      - a definition is a declaration, additionally, it allocates storage and may provide the variable with initial value
      - any declaration that includes an explicit initializer is a definition; an `extern` that has an initialier is a definition
    + differentce
      - to use a variable in more than one file requires declaration that are separated from variable's definition
      - to use the same variable in multiple files, must define variable in one and only one file; other files that use that variable must declare but not define that variable
  - identifiers
  - scope of a name
    + scope: part of the program in which a name has a particular meaning
    + global scope: names defined outside a function; to request to fetch from global scope, do `::variable` because global scope has no name
    + block scope
    + nested scope
      - name can be used by scopes nested inside the scope
      - name declared in the outer scope can be redefined in an inner scope

## Compound Types
  - a type defined in terms of another type
  - reference
    + alternative name for an object, a reference is not an object
    + when reference an object, we bind the reference to its initializer
    + no way to rebind a reference to different object because references must be initialized
    + reference is an alias
      - all operations on the reference are actually operations on the binded object
      - may not define reference to a reference
    + reference definition
      - type of reference and object type must match exactly
      - a reference may be only bound to an object, not a literal or the result of expression
  - pointers
    + can be assigned and copied
    + can point to different objects during lifetime
    + take address of an object
      - may not define a pointer to reference
      - pointer type and object type must match
    + pointer value
      - four values:
	      + point to object
	      + point to the location just after the end of object
	      + null pointer, not bound to any object
	      + invalid
	  - error to copy or access invalid pointer
	+ use pointer to access object
	  - dereferencing a pointer gives the object it points to 
	  - may dereference a valid pointer
	+ null pointers
	  - not point to any object
	  - preprocessor variable NULL
	  - illegal to assign `int` variable to pointer even if its value is 0
	+ operations
	  - any nonzero pointer evaluates to true
	  - equality: equal if hold the same address; possible for a pointer to an object and a pointer one past the end of a different object to hold the same address;
	+ void* pointer
	  - can hold the address to any type of object
	  - type of object at that address is unknown
	  - cannot use void* pointer to operate on the object it addressed
    + compound type declarations
      - define multiple variables
      - pointer to pointer
## `const` qualifier
   - make a variable unchangeable by defining its type const
   - any attempt to change const variable is an error
   - since we cannot change const object, it must be initialized
   - `const` is local to file
     + to share const object among files, define the variable as `extern`
     + `extern` means that the variable is not local to a file and its definition will occur elsewhere
   - references to `const`
     + reference that refers to a const type
     + cannot use this reference to change object
     + const reference is a reference to const
     + can bind a reference to const to a nonconst object, a literal, or an expression
     + a reference to const may refer to an object that is not const





