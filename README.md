# MythCore
##Myth Framework's Core Libraries
###Overview
**MythCore** aims at providing a set of components and libraries in PHP that will make developping web applications much easier (*We Hope So!*)
The project is currently in pre-alpha state but development is going fast and a lot of changes are committed every day.
As a new project in the pore-alpha stages, we will be making regular commits to the various branches. However, we will start to release alpha/pre-alpha preview packages really soon.
To demonstrate the project really supports very fast release cycles, we will start releasing independant parts of the project that can showcase the framework and the benifits of using it.
Those pre-alpha and alpha releases are in no way production ready, but they are good to preview the project and if it peeks your interest, maybe you will be welling to lend a hand ;)
###What's different about it?
We like to think that a lot is different than other frameworks.
* For starters, the whole framework is fully object oriented.
No procedural traces at all (if you decide to use the framework). More importantly, it's consistent.
* One of the problems we face is using different components developed by different people using different conventions and structures.
The purpose of MythCore is to solve this by providing one framework to rule them all and in the .... Ok, we go too far sometimes!
The idea is, whether you are writing the data access layer or the interface of the application, you'll be using the same conventions.
* The framework is developed with a focus on modern web requirements. Social media integration at the framework level and responsiveness are our top priorities, right after ease of use.

###Design Goals
* Social Media features integration at all levels
* Responsiveness and delivering mobile friendly applications
* Modernity (is that a word?)
* Separation of components. You should be able to use only the components you need and not everything else if you so choose.
* Support of Agile development cycles
* Seamless workflow
* Easy to Learn and use
* Object orientation and componentization from the infrastructure up
###Structure
We use the terms **Package** and Unit interchangeably. Packages are top level blocks that serve a, watch this: specific broad purpose!
What we mean is that a package will contain a lot of components, classes, modules that handle a certain task usually involved in web appplication development. For example, the UI package/unit, will contain everything (*hopefully*) needed to create the UI of the application. This of course means components in the UI package will have to handle the HTML, CSS, Javascript, Images, etc. required to create modern interfaces.
This is where **Modules** come in. Each Package consists of one or more *Modules*. Most of the time, one of these modules will be labeled the *Core* module of the package. This means that it is needed by at least a lot of the other modules in the package.
Modules themselves consist of components, usually mainly classes.
The **MythCore** library is supposed to consist mainly of 6 major packages (so far). Namely:
* Data - Handles the storage and retrieval of data from persistnet data source, such as databases, Xml and Json data dumps, data files ... etc. Not to be confused with IO which handles input and output, including writing and reading files. The difference is, while IO provides the ability to read and write files, but it always handles data in the files as basic data structures. Data objects on the other hand treat the data as coherent data structures.
* IO - Handles low level Input/Output operations such as openning, reading and writing files.
* UI - Handles the creation of awsome user interface experience by shieding you from using 27 different languages while working on a project. You write everything from PHP!!
* Route - Hanldes the infrastructure underneath the MVC-like model. Basically it simplifies routing everything so that you will not have a require_once hell!
* API - Enables the abstraction of creating APIs for web applications
* Net - Networking and transport protocol components live here!
###Collaborators Needed!
If you feel the project is interesting, and you are welling to help, please contact me via any means. I'll soon write something on "How you can help" .. when I have time and I'm not writing code! :)