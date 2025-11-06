<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/fct.js"></script>
    </head>
<body>


<h1 class="cour">CSS</h1>
<h1>Course 6: Lesson 6: CSS Flexbox</h1>
<p>hi.i hope to have a good day today we have <b>CSS Flexbox</b> in it we will cover the next : </p>
<ul>
    <li>Flex container and flex items</li>
    <li>Flex direction and wrap properties</li>
    <li>Justify content and align items properties</li>
    <li>Flexbox best practices</li>
</ul>
<h2>Flex and flex items</h2>
<p>Flexbox (Flexible Box Layout) is a CSS layout model that makes it easier to design responsive layouts without using floats or positioning. It’s perfect for dynamic content and adaptable interfaces.</p>
<p>flex box have to main part Flexbox-Container and flexbox-items</p>
<p>we will show you the difrents betwwen flexbox-cntainer and flexbox-items in the following table :</p>
<div class="tbl_area">
 <table class="tbl_2">
 <tr><td class="tbl_2_h">role</td><td class="tbl_2_2_h">description</td></tr>
<tr><td class="tbl_2_1">Flex Container</td><td class="tbl_2_2">The parent element with display: flex or inline-flex</td></tr>
<tr><td class="tbl_2_1_d">Flex Items</td><td class="tbl_2_2_d">The direct children of the flex container that are laid out using flex rules</td></tr>
</table>
</div>
<div class="exp_2">
   <div class="exp_2_1">
     <code>
       &lt; style &gt;
       p{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       <div class="cmt">/* this creat a flex box with p flex-container and their children flex-items */ </div>
         &nbsp; &nbsp;
         justify-content: space-around;<br>
         <div class="cmt">/* this property for the space between the items */ </div>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; justify-content :space-around ;
       }<br>
       .p_children{<br>
       &nbsp; &nbsp;
       background-color: #ba59cbff;<br>
       }
       </code>
    </div>
    <div class="exp_2_2">
      <div class="real_exp" style="display: flex; background-color: #ecededff; justify-content: space-around;">
        <div style="background-color: #e7b2f0ff;">children 1/4 </div>
        <div style="background-color: #e7b2f0ff;">children 2/4 </div>
        <div style="background-color: #e7b2f0ff;">children 3/4 </div>
        <div style="background-color: #e7b2f0ff;">children 4/4 </div>
      </div>
    </div>
</div>
<h2>Flex direction and wrap properties</h2>
<p>flex direction is a property for placed the items (for more explanation flex placed items like a table ) vertical or horizantal . </p>
<p>flex wrap work when the space taked by cheldren big of the flex container space (can put them down if the direction was vertical new colmun if horizantal)</p>
<p> the explanation was in the following tables :</p>
<div class="tbl_area">
 <table class="tbl_2">
   <tr><td class="tbl_2_h">value</td><td class="tbl_2_2_h">description</td></tr>
   <tr><td class="tbl_2_1">row (horizantal LTR: →)</td><td class="tbl_2_2">Default. Items flow left to right</td></tr>
   <tr><td class="tbl_2_1">row-reverse (horizantal RTL: ←)</td><td class="tbl_2_2">Items flow right to left</td></tr>
   <tr><td class="tbl_2_1">colmun (vertical ⬇)</td><td class="tbl_2_2">Items flow top to bottom</td></tr>
   <tr><td class="tbl_2_1_d">colmun-reverse (vertical ⬆)</td><td class="tbl_2_2_d">Items flow bottom to top</td></tr>
</table>
</div>
<div class="tbl_area">
 <table class="tbl_2">
   <tr><td class="tbl_2_h">value</td><td class="tbl_2_2_h">description</td></tr>
   <tr><td class="tbl_2_1">nowrap Container</td><td class="tbl_2_2">Default. All items stay on one line (may overflow)</td></tr>
   <tr><td class="tbl_2_1">wrap</td><td class="tbl_2_2">Items wrap to the next line when needed</td></tr>
   <tr><td class="tbl_2_1_d">wrap-reverse</td><td class="tbl_2_2_d">Items wrap in reverse order (bottom to top or right to left)</td></tr>
</table>
</div>
<div class="exp_2">
    <div class="exp_2_1">
         <code>
       &lt; style &gt;
       .flexbox{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:row;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
       }<br>
        .flexbox2{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:colmun;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
       }<br>
        .flexbox3{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:row-reverse;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
       }<br>
        .flexbox4{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:row-reverse;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
       }<br>
       .containt{<br>
        &nbsp; &nbsp;
       width:40px;<br>
       &nbsp; &nbsp;
       height:40px;<br>
       }<br>
       &nbsp; &nbsp;
       &lt; /style &gt;<br>
       &lt; body &gt;<br>
       &nbsp; &nbsp;
       &lt; div class="flexbox" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
        &lt; div class="flexbox2" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
        &lt; div class="flexbox3" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
        &lt; div class="flexbox4" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
       &nbsp; &nbsp;
       &lt; body &gt;<br>

       </code>
    </div>
    <div class="exp_2_2">
            <div style="display:flex; flex-direction:row; background-color:#d6ffe4ff;border:2px dashed black; height:auto;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>
            <div style="display:flex; flex-direction:column; background-color:#d6ffe4ff;border:2px dashed black; height: 180px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>
            <div style="display:flex; flex-direction:row-reverse; background-color:#d6ffe4ff;border:2px dashed black; height:auto;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>
            <div style="display:flex; flex-direction:column-reverse; background-color:#d6ffe4ff;border:2px dashed black; height: 180px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>

    </div>
    </div>
<div class="exp_2">
    <div class="exp_2_1">
         <code>
       &lt; style &gt;
       .flexbox{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:row;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
       &nbsp; &nbsp;
       flex-wrap: wrap; <br>
       }<br>
        .flexbox2{<br>
       &nbsp; &nbsp;
       display:flex;<br>
       &nbsp; &nbsp;
       flex-direction:colmun;<br>
            &nbsp; &nbsp;
       background-color: #d6ffe4ff; <br>
        &nbsp; &nbsp;
       flex-wrap: wrap; <br>
       }<br>
       .containt{<br>
        &nbsp; &nbsp;
       width:40px;<br>
       &nbsp; &nbsp;
       height:40px;<br>
       }<br>
       &nbsp; &nbsp;
       &lt; /style &gt;<br>
       &lt; body &gt;<br>
       &nbsp; &nbsp;
       &lt; div class="flexbox" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
        &lt; div class="flexbox2" &gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; img class="containt"  src="flower.png"&gt;<br>
       &nbsp; &nbsp;&lt; /div &gt;<br>
       &lt; body &gt;<br>

       </code>
    </div>
    <div class="exp_2_2">
            <div style="display:flex; flex-direction:row; background-color:#d6ffe4ff;border:2px dashed black;width: 110px;flex-wrap:wrap;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>
            <div style="display:flex; flex-direction:column; background-color:#d6ffe4ff;border:2px dashed black; height: 90px;flex-wrap:wrap;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
                <img src="../src/flower.png" alt="" style="width:40px; height:40px;">
            </div>
    </div>
    </div>

<h2>justify content and align items properties</h2>
<p>justify content distributes the space horizontally (if flex-direction: row) or vertically (if flex-direction: column)—depending on your main axis.
</p>
<p>align items controls how items are aligned perpendicular to the main axis—so vertical alignment in a row layout, or horizontal in a column layout.
</p>
<--------------------------------------------example----------------------------------------->

<h2>Flexbox best practices</h2>
<p>Flexbox is a powerhouse for responsive, fluid layouts—especially for one-dimensional arrangements. Since you're already deep into CSS and UI design,here their best practices :</p>
<ul>
<li><b>Core Setup :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Use display: flex on the container.</li>
  <li class="li_dt">- Set flex-direction to control layout flow (row, column, etc.) .</li>
  <li class="li_dt">- Use justify-content for main axis alignment.</li>
  <li class="li_dt">- Use align-items for cross axis alignment.</li>
  <li class="li_dt">- Use align-self to override alignment per item.</li>
    </ul>
<li><b>Sizing & Spacing :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Use flex: 1 to make items grow and fill space .</li>
  <li class="li_dt">- Use flex: 0 1 auto for default behavior.</li>
  <li class="li_dt">- Prefer gap over margins for spacing between items.</li>
  <li class="li_dt">- Avoid fixed width/height unless necessary</li>
  <li class="li_dt">- Use flex-basis to set initial size before growing/shrinking.</li>
  </ul>
<li><b>Responsive Design :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Enable wrapping with flex-wrap: wrap.</li>
  <li class="li_dt">- Use flex-direction: column for mobile stacking.</li>
  <li class="li_dt">- Combine media queries with Flexbox for adaptive layouts.</li>
  <li class="li_dt">- Use min-width and max-width for flexible constraints.</li>
    </ul>
<li><b>Advanced Layouts :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Nest flex containers for complex structures.</li>
  <li class="li_dt">- Use order sparingly to rearrange items.</li>
  <li class="li_dt">- Use align-content for multi-line control when wrapping.</li>
  <li class="li_dt">- Use flex-shrink: 0 to prevent shrinking of key items.</li>
    </ul>
<li><b> Accessibility & RTL :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Use row-reverse for RTL support.</li>
  <li class="li_dt">- Avoid relying on order for semantic structure.</li>
  <li class="li_dt">- Use align-items: baseline for mixed content alignment.</li>
  <li class="li_dt">- Ensure logical tab order and screen reader compatibility.</li>
</ul>
<li><b> Debugging Tip :</b></li>
  <ul style="list-style-type: none;">
  <li class="li_dt">- Use browser dev tools to inspect flex behavior</li>
  <li class="li_dt">- Add temporary borders or backgrounds to visualize layout.</li>
  <li class="li_dt">- Test with different screen sizes and language directions.</li>
  </ul>
<h2>🎁 Bonus Tip:</h2>
<ul>
  <li>for the first time i dont have a real bonus for you (am not a god .man 😂😂 ) so i advice you to practice because a css is a design language so u should activate the open mood try evry thing you think about it.so see you next lesson</li>
</ul>

</body>
</html>