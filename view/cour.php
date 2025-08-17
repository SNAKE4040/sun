<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../cour/css/english/style.css">
    </head>
<body>
<h1 class="cour">CSS</h1>

<<<<<<< HEAD
<h1>Course 3: CSS Properties</h1>
<p>Hi, we meet again! This is the third lesson after the introduction. You have already learned about ("CSS Cascade", "CSS Syntax", and "CSS Selectors"), and now you know many CSS properties that we used in the examples.</p>
<p>Congratulations! At this point, you’ve passed the beginner stage. I'm really happy and proud of you. But here, I will just give you the information. Yes, you’ve done some quizzes, but you don’t yet have real experience.</p>
<p>For that reason, our website provides free coding space. Just click on the <b>Code</b> button at the top, choose your programming language, and feel free to explore programming without limits!</p>
<p>But don’t worry—you are part of us. We are ready to do everything we can to help you in the programming world.</p>
<p>Now, let’s get back to the lesson. Today, we will learn the properties of <b>CSS</b>. We will cover the following topics:</p>

<ul>
  <li>Text properties</li>
  <li>Background properties</li>
  <li>Box model properties</li>
  <li>Positioning properties</li>
  <li>Context properties</li>
</ul>

<h2>Intro</h2>
<p>CSS has a lot of properties. To make it easier, we divide them into groups like this:</p>

<!-- TEXT PROPERTIES -->
<h2>1 - Text Properties</h2>
<p>Used to style text content: size, weight, font family, alignment, and more.</p>
<div class="exp_2">
  <div class="exp_2_1">
    <code>&lt;style&gt;<br>
    div { text-align: center; }<br>
    <div class="cmt">/* Align text to the center */</div><br><br>

    div { font-weight: bold; }<br>
    <div class="cmt">/* Make text bold */</div><br><br>

    div { font-style: italic; }<br>
    <div class="cmt">/* Make text italic */</div><br><br>
    &lt;/style&gt;</code>
  </div>
  <div class="exp_2_2">
    <div style="text-align: center" class="real_exp">Centered text</div>
    <div style="font-weight: bold" class="real_exp">Bold text</div>
    <div style="font-style: italic" class="real_exp">Italic text</div>
  </div>
</div>

<div class="tbl_area">
<table class="tbl_3">
<tr><td class="tbl_3_1_h">Property</td> <td class="tbl_3_2_h">Values</td> <td class="tbl_3_3_h">Description</td></tr>
<tr><td class="tbl_3_1">color</td> <td class="tbl_3_2">rgb(), hexadecimal (#fff), keyword (white)</td> <td class="tbl_3_3">Change the text color</td></tr>
<tr><td class="tbl_3_1">font-family</td> <td class="tbl_3_2">"Font name", generic families (serif, sans-serif)</td> <td class="tbl_3_3">Change the typeface</td></tr>
<tr><td class="tbl_3_1">font-size</td> <td class="tbl_3_2">px, em, rem, %, etc.</td> <td class="tbl_3_3">Set the text size</td></tr>
<tr><td class="tbl_3_1">font-weight</td> <td class="tbl_3_2">normal, bold, 100–900</td> <td class="tbl_3_3">Set the text boldness</td></tr>
<tr><td class="tbl_3_1">font-style</td> <td class="tbl_3_2">italic, normal, oblique</td> <td class="tbl_3_3">Set the text style</td></tr>
<tr><td class="tbl_3_1">text-align</td> <td class="tbl_3_2">left, right, center, justify, start, end</td> <td class="tbl_3_3">Horizontal alignment</td></tr>
<tr><td class="tbl_3_1">text-transform</td> <td class="tbl_3_2">uppercase, lowercase, capitalize, none</td> <td class="tbl_3_3">Control capitalization</td></tr>
<tr><td class="tbl_3_1">letter-spacing</td> <td class="tbl_3_2">px, em, etc.</td> <td class="tbl_3_3">Space between letters</td></tr>
<tr><td class="tbl_3_1">word-spacing</td> <td class="tbl_3_2">px, em, etc.</td> <td class="tbl_3_3">Space between words</td></tr>
<tr><td class="tbl_3_1">line-height</td> <td class="tbl_3_2">normal, number, px, em</td> <td class="tbl_3_3">Space between lines</td></tr>
<tr><td class="tbl_3_1">text-decoration</td> <td class="tbl_3_2">underline, none, overline, line-through</td> <td class="tbl_3_3">Add or remove text decoration</td></tr>
<tr><td class="tbl_3_1">white-space</td> <td class="tbl_3_2">normal, nowrap, pre, pre-wrap</td> <td class="tbl_3_3">Control wrapping and spacing</td></tr>
<tr><td class="tbl_3_1">direction</td> <td class="tbl_3_2">rtl, ltr, inherit</td> <td class="tbl_3_3">Text direction</td></tr>
<tr><td class="tbl_3_1_d">writing-mode</td> <td class="tbl_3_2">horizontal-tb, vertical-rl, vertical-lr</td> <td class="tbl_3_3_d">Text flow direction</td></tr>
</table>
</div>

<!-- BACKGROUND PROPERTIES -->
<h2>2 - Background Properties</h2>
<p>Used for full background management like color, image, position, and attachment.</p>
<div class="exp_2">
  <div class="exp_2_1">
    <code>&lt;style&gt;<br>
    p { background-image: url("flower.png"); }<br>
    <div class="cmt">/* Set an image as the background */</div><br><br>
    &lt;/style&gt;</code>
  </div>
  <div class="exp_2_2">
    <div style="background-image:url('../src/flower.png'); background-size: auto;height:100px;background-position: center;" class="real_exp"></div>
  </div>    
=======
<h1>Course 2: CSS Selectors</h1>
<p>Hi , so in this time we learn all the selector type of <b>CSS</b>. We will cover the following topics:</p>
<ul>
<li>tag selectors</li>
<li>Class selectors</li>
<li>ID selectors</li>
<li>attribue selectors</li>
<li>pseudo-class selectors</li>
<li>pseudo-element selectors</li>
</ul>

<h2>tag selectore</h2>
<p>Like what we say in the previous lesson that we need it to traget all the element have the same type . like we need to style all the botton in the page <br>
<b>Example:</b></p>
<div class="exp">
    <code>&lt;style&gt;<br>
    botton { color: blue; }<br>
    &lt;/style&gt;</code>
</div>

<h2>class Selectors</h2>
<p>ithe same thing we clarify it in the previous lesson . so we use it when we need a style a specifiqc groups <br><b>Example:for a class named "bloc":</b></p>
<div class="exp">
    <code>&lt;style&gt;<br>
    .bloc { display : bloc;
    <div class="cmt">/* this is for not take just content with but to take all line */</div>
     }<br>
    &lt;/style&gt;</code>
</div>
<h2>ID selectors</h2>
<p>it's also in the previous lesson . so ID selectors target a specific element.  

Example: a paragraph with id="bold":</p>
<div class="exp">
    <code>&lt;style&gt;<br>
    #bold { fontweight: bold;
    <div class="cmt">/* this is for the weight of text can use term like "bold" or "normal" or use number between 0-700*/</div>
     }<br>
    &lt;/style&gt;</code>
</div>

<h2>attribue selectors</h2>
<p>this a new so what is it to be simple we use it to traget to a specifice tag or tags have a special attribue </p>
<div class="exp">
    <code>&lt;style&gt;<br>
    [href] { 
    text-decoration : none ;
    <div class="cmt">/*this attribue for decorate the text but she just do a line or not have the next values : */</div>
    <div class="cmt">/* ("underline" : line buttom the text | "overline* : line top of text | "line-throught" : is a line in the middel it's show like strikethrough | "none" : no line )</div>
    <div class="cmt">/we can mix also underline and over line in "underline overline"/</div>

     }<br>
    &lt;/style&gt;</code>
</div>

<p> but we can also use it with atribue val like [attribue=val] in this case we can use some spécifique characthers for more controle of the value search like ("~","*","|","^","$","=") <br>
<div class="exp">
    <code>&lt;style&gt;<br>
    [type="submit"] { 
    border-width : 2px; <div class="cmt">/add a border to the tag styles 0 val is the default no border/</div>
    border-color : cyan; <div class="cmt">/color the to cyan border of the tag styles/</div>
    border-style : solid ;<div class="cmt">/*type of border "solid" ,"dashed","dotted","double" */</div>
    <div class="cmt">/* we can use just border property but we give her the next value in the same line "width,style,color"/</div>
    border-raduis: 10px; <div class="cmt">/*raduis the angle of border */</div>
    
     }<br>
    &lt;/style&gt;</code>
</div>

we will explain it more in the next table</p>

<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> attribue selector</td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1">[href="btn"]</td><td class="tbl_2_2">traget to all tags have href="btn"</td><tr>
<tr><td class="tbl_2_1">[href ^="btn"]</td><td class="tbl_2_2">traget to all tage have val of attribue href start with "btn" like  href="btn-pramary" </td><tr>
<tr><td class="tbl_2_1">[href $="btn"]</td><td class="tbl_2_2">traget to all tage have val of attribue href end with "btn" like  href="secandry-pramary-btn" </td><tr>
<tr><td class="tbl_2_1">[href ~="btn"]</td><td class="tbl_2_2">traget to all tage have the word "btn"  in in attribue href like  href="secandry-pramary btn" not  href="secandry-pramary-btn" should be separate by espace</td><tr>
<tr><td class="tbl_2_1">[href *="btn"]</td><td class="tbl_2_2"> traget to all tage have the word "btn"  in in attribue href like  href="secandry-pramary btn" or  href="secandry-pramary-btn" or  href="secandry-pramarybtn" just should be doesn't matter if separate by espace or not </td><tr>
<tr><td class="tbl_2_1">[href |="btn"]</td><td class="tbl_2_2">traget to all tags have href="btn" or strart with "btn-" like href="btn-danger"</td><tr>
</table>
<h2>pseudo-class attribue </h2>
<p> the pseudo-class attribue was spécial is not a traget normal because first should add a selector between (tag class attribue selector) and she traget the action happend (hover-focus ...)to a tag or structur (first-child,empty,ntoftype) or chec the input state (cheked,disable,required) or content&language (lang,dir) and finnaly can use to ui state (is ,where ...);
<p>
<div class="exp">
    <code>&lt;style&gt;<br>
    div :hover { 
     <div class="cmt">/*this style work when the mouse has on the div tag */</div>
    background-color:cyan;
     }<br>
    input [type="text"] :focus { 
     <div class="cmt">/*this style work when we write in the input type text */</div>
    border-color:cyan;
     }<br>
     p :first-child { 
     <div class="cmt">/*this style work on the first child of p */</div>
    background-color:cyan;
     }<br>
     :is(p) { 
     <div class="cmt">/*this style work if tag was a p */</div>
    background-color:cyan;
     }<br>
     
    &lt;/style&gt;</code>


</div>
<p> we will explain of the user action more in the next table</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> pseudo-class (Action)</td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> :hover</td><td class="tbl_2_2"> traget the tag when the mouse was on it</td><tr>
<tr><td class="tbl_2_1"> :active</td><td class="tbl_2_2"> traget the tag when we click on it </td><tr>
<tr><td class="tbl_2_1"> :focus</td><td class="tbl_2_2">work when the tag was focus like in the input text </td><tr>
<tr><td class="tbl_2_1"> :focus-within</td><td class="tbl_2_2"> work if it focus or their children</td><tr>
<tr><td class="tbl_2_1"> :focus-visible</td><td class="tbl_2_2"> It only appears when using the keyboard or assistive technologies (good for blind people)</td><tr>
</table>
</div>
<p> we will explain of the user action more in the next table</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> pseudo-class (struct)</td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> :first-child</td><td class="tbl_2_2">the style work in the first child of the parent</td><tr>
<tr><td class="tbl_2_1"> :last-child</td><td class="tbl_2_2">work in the last child of parent </td><tr>
<tr><td class="tbl_2_1"> :nth-child(n)</td><td class="tbl_2_2"> matched the n child</td><tr>
<tr><td class="tbl_2_1"> :nth-last-child(n)</td><td class="tbl_2_2"> the same for nth-child(n) but she start with last to the first</td><tr>
<tr><td class="tbl_2_1"> :nth-type(n)</td><td class="tbl_2_2"> matched the n type</td><tr>
<tr><td class="tbl_2_1"> nth-last-type(n)</td><td class="tbl_2_2"> the same for nth-type(n) but she start with last to the first</td><tr>
<tr><td class="tbl_2_1"> :only-child</td><td class="tbl_2_2"> work if only it's child</td><tr>
<tr><td class="tbl_2_1"> :only-of-type</td><td class="tbl_2_2"> work if element of its type in the parent</td><tr>
<tr><td class="tbl_2_1"> :empty</td><td class="tbl_2_2"> work if the elemnt have no children</td><tr>
</table>
</div>
<p>next we will explain of form & input state in the next table</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> pseudo-class (Form & input state)</td><td class="tbl_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> :cheked</td><td class="tbl_2_2">work if was cheked (radio,chekbox) </td><tr>
<tr><td class="tbl_2_1"> :disabled</td><td class="tbl_2_2">work if the input disabled </td><tr>
<tr><td class="tbl_2_1"> :enabled</td><td class="tbl_2_2"> work if the input enabled (the default value of input or button )</td><tr>
<tr><td class="tbl_2_1"> :required</td><td class="tbl_2_2"> work if the input required (required use for the needed information )</td><tr>
<tr><td class="tbl_2_1"> :optional</td><td class="tbl_2_2"> worked in the optional input</td><tr>
<tr><td class="tbl_2_1"> :valid</td><td class="tbl_2_2"> workd in the input have a valid value (valid value decided by pattern or js functions normally)</td><tr>
<tr><td class="tbl_2_1"> :invalid</td><td class="tbl_2_2"> worked in the input have a invalid input</td><tr>
<tr><td class="tbl_2_1"> :in-range</td><td class="tbl_2_2"> -  targets inputs whose current value is within the allowed range.</td><tr>
<tr><td class="tbl_2_1"> :out-of-range</td><td class="tbl_2_2"> - targets inputs whose value is outside the allowed range.</td><tr>
<tr><td class="tbl_2_1"> :read-only</td><td class="tbl_2_2"> - targets inputs whose can't write in them just read (have a default value in the general)</td><tr>
<tr><td class="tbl_2_1"> :read-write</td><td class="tbl_2_2">  targets inputs whose can write and read it</td><tr>
</table>
</div>
<p>next we will explain of <b>UI state<b> in the next table</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> pseudo-class (UI state)</td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> :is()</td><td class="tbl_2_2"> tragets tag have in bakets ()</td><tr>
<tr><td class="tbl_2_1"> :where()</td><td class="tbl_2_2"> the same of is() but without specificity</td><tr>
<tr><td class="tbl_2_1"> :has</td><td class="tbl_2_2"> tragets who have the element in brakets in them</td><tr>
<tr><td class="tbl_2_1"> :not()</td><td class="tbl_2_2">tragets tags diffrents the one have in the brakets ()  </td><tr>
</table>
</div>
<h2> pseudo-element selector </h2>
<p> the pseudo-element give u the permession to style a special part in the element in the syntax we add "::" before it not ":" like pseudo-class </p>
<div class="exp">
    <code>&lt;style&gt;<br>
    h1 ::before { 
     content: "hello";
     <div class="cmt">/*this style "hello" to the h1 content */</div>
     }<br>
    input ::file-selector-button { 
    border-color:cyan;
     }<br>
     b ::first-letter { 
     <div class="cmt">/*this style work on the first child of p */</div>
    background-color:cyan;
     }<br>
     
    &lt;/style&gt;</code>
<div>


</div>
<p>will explain them all in the next table</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> pseudo-element </td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> ::before</td><td class="tbl_2_2"> add content to the selctor before the content of element</td><tr>
<tr><td class="tbl_2_1"> ::after</td><td class="tbl_2_2"> add content to the selctor after the content of element</td><tr>
<tr><td class="tbl_2_1"> ::first-line</td><td class="tbl_2_2"> styles the first line of element</td><tr>
<tr><td class="tbl_2_1"> ::first-letter</td><td class="tbl_2_2"> styles the first letter of element</td><tr>
<tr><td class="tbl_2_1"> ::placeholder</td><td class="tbl_2_2">  styles the placeholder of inputs</td><tr>
<tr><td class="tbl_2_1"> ::selection</td><td class="tbl_2_2">  styles the text selected by user</td><tr>
<tr><td class="tbl_2_1"> ::marker</td><td class="tbl_2_2">  styles the bullet or numbering symbol of list</td><tr>
<tr><td class="tbl_2_1"> ::file-selector-button</td><td class="tbl_2_2"> styles the button of "input type="file"</td><tr>
</table>
>>>>>>> bbb3716 (cour)
</div>

<div class="tbl_area">
<table class="tbl_3">
<tr><td class="tbl_3_1_h">Property</td> <td class="tbl_3_2_h">Values</td> <td class="tbl_3_3_h">Description</td></tr>
<tr><td class="tbl_3_1">background-color</td> <td class="tbl_3_2">rgb(), hexadecimal (#fff), keyword (white)</td> <td class="tbl_3_3">Change the background color</td></tr>
<tr><td class="tbl_3_1">background-image</td> <td class="tbl_3_2">url("img_link"), none, linear-gradient()</td> <td class="tbl_3_3">Set a background image</td></tr>
<tr><td class="tbl_3_1">background-repeat</td> <td class="tbl_3_2">repeat, repeat-x, repeat-y, no-repeat, space, round</td> <td class="tbl_3_3">Control image repetition</td></tr>
<tr><td class="tbl_3_1">background-position</td> <td class="tbl_3_2">center, top left, bottom right, %, px</td> <td class="tbl_3_3">Set image position</td></tr>
<tr><td class="tbl_3_1">background-size</td> <td class="tbl_3_2">cover, contain, auto, %, px</td> <td class="tbl_3_3">Define image scaling</td></tr>
<tr><td class="tbl_3_1">background-attachment</td> <td class="tbl_3_2">scroll, fixed, local</td> <td class="tbl_3_3">Background scroll behavior</td></tr>
<tr><td class="tbl_3_1">background-clip</td> <td class="tbl_3_2">border-box, padding-box, content-box, text</td> <td class="tbl_3_3">Defines the painting area</td></tr>
<tr><td class="tbl_3_1_d">background-origin</td> <td class="tbl_3_2">border-box, padding-box, content-box</td> <td class="tbl_3_3_d">Positioning reference box</td></tr>
</table>
</div>

<!-- BOX MODEL -->
<h2>3 - Box Model Properties</h2>
<p>Used for layout control, especially in responsive designs.</p>
<div class="exp_2">
  <div class="exp_2_1">
    <code>&lt;style&gt;<br>
    p { width: 30%; margin-left: auto; margin-right: auto; }<br>
    <div class="cmt">/* Paragraph width is 30% of the parent, centered horizontally */</div><br><br>
    &lt;/style&gt;</code>
  </div>
  <div class="exp_2_2">
    <div class="real_exp">Normal paragraph</div>
    <div style="margin-left:auto; margin-right:auto; width:30%;" class="real_exp">Styled paragraph</div>
  </div>    
</div>

<div class="tbl_area">
<table class="tbl_3">
<tr><td class="tbl_3_1_h">Property</td> <td class="tbl_3_2_h">Values</td> <td class="tbl_3_3_h">Description</td></tr>
<tr><td class="tbl_3_1">width / height</td> <td class="tbl_3_2">auto, %, px, em, min-content, max-content</td> <td class="tbl_3_3">Size of the content area</td></tr>
<tr><td class="tbl_3_1">padding</td> <td class="tbl_3_2">px, em, %</td> <td class="tbl_3_3">Space inside the element, around the content</td></tr>
<tr><td class="tbl_3_1">border</td> <td class="tbl_3_2">width style color</td> <td class="tbl_3_3">Border around the element</td></tr>
<tr><td class="tbl_3_1">outline</td> <td class="tbl_3_2">width style color</td> <td class="tbl_3_3">Outline outside the border (not part of the box model)</td></tr>
<tr><td class="tbl_3_1">margin</td> <td class="tbl_3_2">px, em, %</td> <td class="tbl_3_3">Space outside the element</td></tr>
<tr><td class="tbl_3_1_d">box-sizing</td> <td class="tbl_3_2">content-box, border-box</td> <td class="tbl_3_3_d">How width/height are calculated</td></tr>
</table>
</div>

<!-- POSITIONING -->
<h2>4 - Positioning Properties</h2>
<p>Used to manage element positioning.</p>
<div class="exp_2">
  <div class="exp_2_1">
    <code>&lt;style&gt;<br>
    p { position: absolute; top:30px; background-color: #c099f4ff; }<br>
    <div class="cmt">/* Positioned 30px from the top of the parent (or body if no parent is relative) */</div><br><br>
    &lt;/style&gt;</code>
  </div>
 <div style="position:relative; border: #0c010e dashed 2px;" class="exp_2_2">
    <div style="position:absolute; top:30px;background-color:#c099f4ff; border:2px solid #000; height:40px; padding :2px;" class="real_exp">Absolute paragraph</div>
  </div>    
</div>

<div class="tbl_area">
<table class="tbl_3">
<tr><td class="tbl_3_1_h">Property</td> <td class="tbl_3_2_h">Values</td> <td class="tbl_3_3_h">Description</td></tr>
<tr><td class="tbl_3_1">position</td> <td class="tbl_3_2">static, relative, absolute, fixed, sticky</td> <td class="tbl_3_3">Defines the positioning method</td></tr>
<tr><td class="tbl_3_1">top / bottom</td> <td class="tbl_3_2">px, %, em</td> <td class="tbl_3_3">Vertical offset</td></tr>
<tr><td class="tbl_3_1">left / right</td> <td class="tbl_3_2">px, %, em</td> <td class="tbl_3_3">Horizontal offset</td></tr>
<tr><td class="tbl_3_1">inset</td> <td class="tbl_3_2">px, %, em</td> <td class="tbl_3_3">Shorthand for top, right, bottom, left</td></tr>
<tr><td class="tbl_3_1">float</td> <td class="tbl_3_2">left, right</td> <td class="tbl_3_3">Floats the element to one side</td></tr>
<tr><td class="tbl_3_1">z-index</td> <td class="tbl_3_2">number</td> <td class="tbl_3_3">Stacking order</td></tr>
<tr><td class="tbl_3_1_d">clear</td> <td class="tbl_3_2">left, right, both, none</td> <td class="tbl_3_3_d">Prevents wrapping around floated elements</td></tr>
</table>
</div>

<!-- CONTEXT -->
<h2>5 - Context Properties</h2>
<div class="exp">
  <code>&lt;style&gt;<br>
  b { display: block; background-color: #5a1ea9; }<br>
  <div class="cmt">/* Block elements take the full width and push the next element below */</div><br>
  &lt;/style&gt;</code>
</div>

<div class="tbl_area">
<table class="tbl_3">
<tr><td class="tbl_3_1_h">Property</td> <td class="tbl_3_2_h">Values</td> <td class="tbl_3_3_h">Description</td></tr>
<tr><td class="tbl_3_1">display</td> <td class="tbl_3_2">block, inline, flex, inline-block, grid</td> <td class="tbl_3_3">Determines the element’s display type</td></tr>
<tr><td class="tbl_3_1_d">overflow</td> <td class="tbl_3_2">visible, hidden, scroll, auto</td> <td class="tbl_3_3_d">Controls content overflow</td></tr>
</table>
</div>

<!-- BONUS -->
<h2>🎁 Bonus Tip:</h2>
<<<<<<< HEAD
<ul>
  <li>Width, height, top, left, right, and bottom properties don’t work on inline elements. Convert them into <code>block</code> or <code>inline-block</code> to apply these styles.</li>
  <li><b>Advice:</b> If you don’t understand something, relax—it’s normal. Try it in a real page to understand it better.</li>
</ul>
=======

<ul>
<li> the pseudo-class or elemnt should have a selector of ("tag","id","class","attribue") before it to work correctly</li>
<li> we can match a lot of selector by the next way one of ("tag","id","class") and atribue selector or ("tag","id","class") and pseudo-class or element or ("tag","id","class") and atribue and  pseudo-class or element  <b> (we do that for more precize )</li>
<code>&lt;style&gt;<br>
    input [type="text"] :hover { 
     <div class="cmt">/*this style the input have type text when she is hover */</div>
    background-color:cyan;
     }<br>
 &lt;/style&gt;</code>
<div>
<li>we have some symbol do it in between tow selctor like (" ","+",">","~")</li>
</ul>
<p> we will explain in table : </p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h"> symbol</td><td class="tbl_2_2_h">explication</td></tr>
<tr><td class="tbl_2_1"> space </td><td class="tbl_2_2"> Any nested child (no mater if child of child)</td><tr>
<tr><td class="tbl_2_1"> > </td><td class="tbl_2_2"> Only direct children</td><tr>
<tr><td class="tbl_2_1"> ~ </td><td class="tbl_2_2"> Next sibling only</td><tr>
<tr><td class="tbl_2_1"> + </td><td class="tbl_2_2"> All following siblings</td><tr>
</table>
</div> 
<div class="exp">
    <code>&lt;style&gt;<br>
    div p { 
     <div class="cmt">/*this style work in any p insead div */</div>
    background-color:cyan;
     }<br>
    form > input { 
     <div class="cmt">/*this style work in any input child of form */</div>
    border-color:cyan;
     }<br>
     h2 + p { 
     <div class="cmt">/*this style work on the first next siblling of h2 was p */</div>
    background-color:cyan;
     }<br>
      div ~ p{ 
     <div class="cmt">/this style work in all the the following siblling of div was a p/</div>
    background-color:cyan;
     }<br>
     
    &lt;/style&gt;</code>


</div>
>>>>>>> bbb3716 (cour)
</body>
</html>