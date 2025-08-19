<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../cour/css/english/style.css">
    </head>
<body>
<h1 class="cour">CSS</h1>
<h1 class="cour">CSS</h1>

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
    p { position: absolute; top:30px; background-color: #5a1ea9; }<br>
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
<ul>
  <li>Width, height, top, left, right, and bottom properties don’t work on inline elements. Convert them into <code>block</code> or <code>inline-block</code> to apply these styles.</li>
  <li><b>Advice:</b> If you don’t understand something, relax—it’s normal. Try it in a real page to understand it better.</li>
</ul>
</body>
</html>