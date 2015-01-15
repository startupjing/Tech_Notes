# Web Services

- [Introduction](#Introduction)
- [Advantages](#Advantages)
- [Characteristics](#Characteristics)
- [Architecture](#Architecture)
- [Components](#Components)
- [Security](#Security)
- [Standards](#Standards)

<a name="Introduction"/>

## Introduction
+ complete web services
  - available over Internet or private networks
  - use XML messaging system
  - not tied to specific programming language and OS
  - built on open standards such as TCP/IP, HTTP, Java, HTML, XML
  - self-contained, modular, distributed, dynamic
+ components
  - basic platform: XML + HTTP
  - Simple Object Access Protocol(SOAP)
  - Universal Description, Discovery and Integration(UDDI)
  - Web Services Description Language(WSDL)
+ example
  - client program transfers message into a SOAP message
  - SOAP message sent to Web Services as HTTP POST request
  - Web Service unpacks SOAP requests and converts to a command that application understands; application processes information and responds
  - Web Service packages up response into SOAP message, send back to client program as response
  - client program unpacks SOAP message to get results
  

<a name="Advantages"/>

## Advantages
+ expose existing function onto network
  - Web Service remotely invoked using HTTP
  - allow to expose the functionality of existing code over the network
+ connect different applications
  - allow different applications to talk with each other to share data and services
  - make the application platform and technology independent 
+ standardized protocol
  - Web Services use standardized protocol for communication
  - give wide range of choices, reduction in cost, increase in quality
+ low cost in communication
  - use SOAP over HTTP protocol for communication
  - use existing low cost internet for implementing Web Services
  - can be implemented over other reliable transport mechanism
  
<a name="Characteristics"/>

## Characteristics
+ based on XML
  - use XML on data representation and data transportation
  - remove bindings on networking, OS, platform
+ loosely coupled between consumer and server
  - consumer not tied to web services
  - web services interface can change over time without affecting client's ability to use the service
  - make software system more manageable
+ able to be synchronous or asynchronous
  - synchronicity: client blocks and waits for service to complete its operation before continuing; client receives result when service completed
  - asychronicity: allow client to invoke a service and execute other functions; client receives result at a later time
+ remote procedure calls
  - allow client to invoke procedures, functions on remote objects using XML-based protocol
  - EJB and .NET
+ document exchange
  - XML can also represent complex documents
   
<a name="Architecture"/>

## Architecture
+ Web Service Role
  - service provider
    + implement service
    + make service available on Internet
  - service requestor
    + consumer of web service
    + open network connection and send XML request
  - service registry
    + central place where developers can public new service
    + centralized directory of services
+ Web Service Protocol Stack
  - service transport
    + transport messages between applications
    + HTTP,SMTP,FTP,etc
  - XML messaging
    + encode message in XML format
    + make message understood at either end
    + XML-RPC and SOAP
  - service description
    + describe public interface to specific web service
    + handled via Web Service Description Language(WSDl)
  - service discovery
    + centralize services into common registry
    + provide public functionality
    + handled via Universal Description,Discovery,and Integration(UDDI)

<a name="Components"/>

## Components
+ XML-RPC
  - use XML message to perform RPCs
  - encoded in XML and send using HTTP POST
  - platform independent
  - allow different applications to communicate
+ SOAP
  - communication between applications
  - format for sending messages
  - platform,language independent
  - allow to get around firewalls
+ WSDL
  - XML-based language for describing Web Services and how to access them and what operations it will perform
  - information exchange in distributed environments
  - language that UDDI uses
+ UDDI
  - describe,publish,find web services
  - platform independent
  - communicate via SOA
  
 
<a name="Security"/>
## Security
+ confidentiality
  - ensure the communication remains confidential
  - notes
    + XML-RPC and SOAP run on top of HTTP
    + HTTP supports Secure Sockets Layer(SSL)
    + communication encrypted using SSL
    + SSL not adequate for a chain of applications, use W3C XML Encryption standard
+ authentication
  - how to identify user? is user authorized?
  - notes
    + HTTP includes basic authentication
    + SOAP security extensions
    + Security Assertion Markup Language(SAML)
+ network security
   
<a name="Standards"/>
## Standards
+ transports
  - Blocks Extensible Exchange Protocol(BEEP)
+ messaging
  - SOAP
+ description and discovery
  - UDDI
  - WSDL
+ security
  - Security Assertion Markup Language(SAML)
+ management
  - Web Services Distributed Management

 
