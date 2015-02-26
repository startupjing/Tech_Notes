## Introduction

+ Simple Program
  - function definition: return type, function name, parameter list, function body
  - value returned from main(): status indicator
  - source files: program files with suffix .cpp, .cc, etc
  - show status indicator: `echo $?` or `echo %ERRORLEVEL%`

+ Simple Input/Output
  - stream: sequence of characters read from or written to IO device; characters are generated, or consumed sequentially over time
  - iostream library: istream and ostream
  - standard input and output
    + standard input: istream object cin
    + standard output: ostream object cout
    + standard error: cerr
    + logging: clog
  - writing to streams
    + string literal: a sequence of characters enclosed in double quotation marks
    + manipulator(endl): end the current line and flush the buffer associated with that device; flushing ensures that all output the program has generated so far is written to output stream instead of sitting in memory
    + when debug using print statements, should always flush the stream; otherwise, if program crashes, output stays in the buffer and leads to incorrect inferences
 - using names from Standard Library
    + namespace: avoid inadvertent collisions between the names defined and uses of those names inside a library
    + scope operator: `std::cout`

+ Comments
 
+ Flow of Control

+ Classes
  - a class defines a type along with a collection of operations
  - three questions
    + what name
    + where defined
    + what operations
  - include header files to access self-defined class
  - member function(method)