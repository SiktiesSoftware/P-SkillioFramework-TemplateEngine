<div align="center">
    <h1>Skilio framework - Template engine</h1>
    <i>Hi, welcome to my project, hope you will like it !</i>                        <br />
    <b> > ENJOY < </b>
</div>
<div align="center">
    <h2>Languages and libraries used for this project</h2>
    <h3> Languages </h3>
    <img height="50" src="https://github.com/dam277/dam277/raw/master/src/images/Html.png" />
    <img height="50" src="https://github.com/dam277/dam277/raw/master/src/images/Php.png" />
                                                                                     <br />
    <h3> Databases </h3>
                                                                                     <br />
    <h3> Libraries </h3>
                                                                                     <br />
</div>
<div align="center">
   <h2 align="center">Table of Contents</h2>
  
   [What's the project ?](#the-project)                                              <br />
   [Features](#features)                                                             <br />
   [Contributors](#contributors)                                                     <br />
   [Other links](#other-links)
</div>

<div align="center">

   ## The project
   The project consists of creating a template engine in PHP to create my own "language". <br />
   The template engine will translate .skiliox language into php. <br />
   On the skilio framework, there is some VIEWS which are the front-end of the website. The role of the new extension .skilio is to make the template engine recognize the files and translate some elements from the view into php to delete all the <?php for () ... ?> tags on the view and let uniquely some basic tags [for] ... [/for] 

   ## Features
   for [for $i = 0; $i < count($array); $i++] {{ $array[$i] }} [/for] // ["foo", "too", "boo"] => foo \n too \n boo <br />
   if  [if $i < 5] // TRUE [else if $i > 6] // FALSE TRUE [else] //FALSE FALSE [/if] <br />
   foreach [foreach $foo as $key => $value] ... [/foreach] <br />
   while [while $i < 5] ... [/while] <br />
   do while [do] ... [/while $i < 5] <br />
   debug [dump $var]

   ## Contributors
   | <b> <a href="https://github.com/dam277">Damien Loup</a> </b>       |
   |:------------------------------------------------------------------:|
   | <img height="200px" src="https://avatars.githubusercontent.com/u/60733960?v=4" /> |
   
   ## Other links
   <a href="https://dam277.github.io/P_Portfolio/">Portfolio</a>                     <br />
   <a href="https://github.com/dam277/P-SkilioFramework">Skilioframework</a>         <br />
</div>
