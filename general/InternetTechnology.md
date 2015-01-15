# Internet Technologies

Contents:
- [Overview](#Overview)
- [Reference Models](#Reference Models)
- [DNS](#DNS)
- [Services](#Services)
- [Connection](#Connection)
- [Protocols](#Protocols)



<a name="Overview"/>
## Overview
+ Internet
  - introduction 
    + global interconnected computer networks
    + use TCP/IP protocol
    + unique IP address, identify computer location
    + DNS resolves name to IP address
  - advantage
  - disadvantage
+ Intranet
  - introduction
    + private network within organization
    + unique IP address in Intranet
  - benefits
    + communication
    + time saving
    + collaboration
    + platform independency
    + more
 + Extranet
   - introduction
     + network within organization, use Internet to connect with outside in a controlled manner
     + implemented as Virtual Private Networks(VPN), offering secure network in public Internet
     + VPN uses Internet Protocol Security Architecture(IPSEC) and add additional security layer to TCP/IP protocol
   - benefits/issues
   
<a name="Reference Models"/>

## Reference Models
+ overview
  - provide a way how devices can communicate regardless their architecture
  - hypothetical model: OSI model
  - practical model: TCP/IP model
+ OSI model
  - Open System Interface(OSI)
  - physical layer
    + maintain physical connection
    + convert digital to electrical signal
    + decide simplex,half duplex or full duplex
  - data link layer
    + synchronization and error control
    + error detection and add error detection bits
  - network layer
    + route signals through channels
    + network controller, decide the route
    + divide outgoing message and assemble incoming message
  - transport layer
    + decide whether transmission should take place
    + multiplexing
    + guarantee transmission of data from one to another end
  - session layer
    + manage conversations between two applications
    + log on and log off, user identification
  - application layer
    + provide services
    + login and check password, etc
+ TCP/IP model
  - application layer: TELNET,FTP,SMTP,DN,HTTP,NNTP
  - transport layer: TCP/IP,UDP
  - Internet layer: IP
  - host-to-network layer: ARPANET,LAN,SATNET
  
<a name="DNS"/>
## DNS(Domain Name System)
+ IP address
  - uniquely assigned to each host on Internet
  - network component and host component
+ Uniform Resource Locator(URL)
  - refer to a web address
  - uniquely identify a document
  - absolute URL
    + address = protocol used + server name + path name + file name
    + protocol that create URL: FTP,https,mailto
  - relative URL
    + used for internal links
    + omit protocol and server from address
+ Domain Name System
  - Domain Names
    + symbolic string associated with IP address
    + examples: com,edu.gov,net
  - Domain Name Space
    + hierarchy in Internet naming structure
  - Name Server
    + DNS distributed database
    + root server, primary server, secondary server
    
<a name="Services"/>
## Services
+ communication service
  - email, telnet, VoIp, IM, IRC
+ information retrieval services
  - FTPm Gopher, Archie
+ web services
  - exchange information between applications
+ World Wide Web
+ Video Conferencing

<a name="Connection"/>
## Connection
+ Internet Service Providers(ISP)
  - Internet access
  - domain name registration
  - dial-up access
  - leased line access
+ connection
  - dial-up connection
  - ISDN
  - DSL
  - cable TV
  - satellite
  - wireless

<a name="Protocols"/>

## Protocols
+ Transmission Control Protocol(TCP)
  - reliable and connection oriented
  - retransmit unacknowledged bytes
  - services
    + stream deliver
    + sending and receiving buffers
    + segmentation
    + full duplex
    + connection oriented
    + reliable service
+ Internet Protocol(IP)
  - connectionless and unreliable
  - no guarantee on successful transmission
+ User Datagram Protocol(UDP)
  - connectionless and unreliable
  - no guarantee on receiving data
  - transmit in datagram
  - used for application transmitting small data at one time
+ File Transfer Protocol(FTP)
  - copy files from one host to another
  - control process and data transfer process
  - control connection and data connection
  - port 21 for control connection and port 20 for data connection
+ Telnet
  - log into remote computer on the internet
+ Hyper Text Transfer Protocol(HTTP)
  - communication between browser and web server
  - HTTP request: request line, header fields, message body
  - HTTP response: status line, headers, message body
  