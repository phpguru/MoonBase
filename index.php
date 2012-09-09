<?php include("header.php"); ?>

<body>

<!-- Delete everything in this .container and get started on your own site! -->

<div id="top" class="container">
    <header class="row">
        <div class="twelve columns text_center">
            <h1 class="title remove_bottom">MoonBase</h1>
            <p class="gray"><strong><em>Plan, design, and easily build responsive sites/apps</em></strong></p>
            <hr>
        </div>
    </header>
    <div class="row"> 
        
        <!-- Start of left column (three columns) -->
        <div class="three columns">
            <div class="nav">
                <h2 class="half_bottom"><a href="#top" class="scroll">MoonBase</a></h2>
                <ul class="unstyled">
                    <li><a href="#typography" class="scroll">Typography</a></li>
                    <li><a href="#lists" class="scroll">Lists</a></li>
                    <li><a href="#media" class="scroll">Media</a></li>
                    <li><a href="#buttons" class="scroll">Buttons</a></li>
                    <li><a href="#columns" class="scroll">12 column grid</a></li>
                    <li><a href="#forms" class="scroll">Forms</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Start of right column (nine columns) -->
        <div class="nine columns moon-base-content">
            <div class="row">
                <div id="typography" class="twelve columns">
                    <h4>Typography</h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <h1>Heading 1</h1>
                    <h2>Heading 2</h2>
                    <h3>Heading 3</h3>
                    <h4>Heading 4</h4>
                    <h5>Heading 5</h5>
                    <h6>Heading 6</h6>
                    <p> <a href="#">a element</a><br>
                        <abbr>abbr element</abbr> and <abbr title="Title text">abbr element with title</abbr><br>
                        <b>b element</b><br>
                        <cite>cite element</cite><br>
                        <code>code element</code><br>
                        <del>del element</del><br>
                        <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn><br>
                        <em>em element</em><br>
                        <i>i element</i><br>
                        img element <img src="img/apple-touch-icon-57x57-precomposed.png" height="16" width="16" alt="Alt text"><br>
                        <ins>ins element</ins><br>
                        <kbd>kbd element</kbd><br>
                        <mark>mark element</mark>
                        <br>
                        <q>q element <q>inside</q> a q element</q><br>
                        <s>s element</s><br>
                        <samp>samp element</samp><br>
                        <small>small element</small><br>
                        <span>span element</span><br>
                        <strong>strong element</strong><br>
                        <sub>sub element</sub><br>
                        <sup>sup element</sup><br>
                        <var>var element</var><br>
                        <u>u element</u> </p>
                    
                    <!-- Inside blockquote's wrap the content in a <p> then attribute with a <cite> -->
                    <blockquote>
                        <p>This is a blockquote. This is it's defaulted style.</p>
                        <cite>Tim Person, Position &amp; Company</cite> </blockquote>
                </div>
                <div class="six columns">
                    <p class="panel radius5 small"> <code><strong>Markup:</strong><br>
                        <span class="red">&lt;a href="#" title=""&gt;</span>a element<span class="red">&lt;/a&gt;</span><br>
                        <span class="red">&lt;abbr&gt;</span>abbr element<span class="red">&lt;/abbr&gt;</span> and <span class="red">&lt;abbr title=""&gt;</span>abbr element with title<span class="red">&lt;/abbr&gt;</span><br>
                        <span class="red">&lt;b&gt;</span>b element<span class="red">&lt;/b&gt;</span><br>
                        <span class="red">&lt;cite&gt;</span>cite element<span class="red">&lt;/cite&gt;</span><br>
                        <span class="red">&lt;code&gt;</span>code element<span class="red">&lt;/code&gt;</span><br>
                        <span class="red">&lt;del&gt;</span>del element<span class="red">&lt;/del&gt;</span><br>
                        <span class="red">&lt;dfn&gt;</span>dfn element<span class="red">&lt;/dfn&gt;</span> and <span class="red">&lt;dfn title="Title text"&gt;</span>dfn element with title<span class="red">&lt;/dfn&gt;</span><br>
                        <span class="red">&lt;em&gt;</span>em element<span class="red">&lt;/em&gt;</span><br>
                        <span class="red">&lt;i&gt;</span>i element<span class="red">&lt;/i&gt;</span><br>
                        img element <span class="red">&lt;img src="img/apple-touch-icon-57x57-precomposed.png" height="16" width="16" alt=""&gt;</span><br>
                        <span class="red">&lt;ins&gt;</span>ins element<span class="red">&lt;/ins&gt;</span><br>
                        <span class="red">&lt;kbd&gt;</span>kbd element<span class="red">&lt;/kbd&gt;</span><br>
                        <span class="red">&lt;mark&gt;</span>mark element<span class="red">&lt;/mark&gt;</span><br>
                        <span class="red">&lt;q&gt;</span>q element <span class="red">&lt;q&gt;</span>inside<span class="red">&lt;/q&gt;</span> a q element<span class="red">&lt;/q</span>&gt;<br>
                        <span class="red">&lt;s&gt;</span>s element<span class="red">&lt;/s&gt;</span><br>
                        <span class="red">&lt;samp&gt;</span>samp element<span class="red">&lt;/samp&gt;</span><br>
                        <span class="red">&lt;small&gt;</span>small element<span class="red">&lt;/small&gt;</span><br>
                        <span class="red">&lt;span&gt;</span>span element<span class="red">&lt;/span&gt;</span><br>
                        <span class="red">&lt;strong&gt;</span>strong element<span class="red">&lt;/strong&gt;</span><br>
                        <span class="red">&lt;sub&gt;</span>sub element<span class="red">&lt;/sub&gt;</span><br>
                        <span class="red">&lt;sup&gt;</span>sup element<span class="red">&lt;/sup&gt;</span><br>
                        <span class="red">&lt;var&gt;</span>var element<span class="red">&lt;/var&gt;</span><br>
                        <span class="red">&lt;u&gt;</span>u element<span class="red">&lt;/u&gt;</span><br>
                        <br>
                        <span class="red">&lt;blockquote&gt;</span><br>
                        <span class="red">&lt;p&gt;</span>This is a blockquote. This is it's defaulted style.<span class="red">&lt;/p&gt;</span><br>
                        <span class="red">&lt;cite&gt;</span>Tim Person, Position &amp; Company<span class="red">&lt;/cite&gt;</span> <span class="red">&lt;/blockquote&gt;</span><br>
                        </code> </p>
                </div>
            </div>
            <div class="row">
                <div id="lists" class="twelve columns">
                    <h4>Lists <a href="#top" class="right scroll small">^ Top</a></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <p class="panel radius5"><strong>Ordered list</strong></p>
                    <ol>
                        <li>List item 1</li>
                        <li>List item 2
                            <ol>
                                <li>List item 2.1</li>
                                <li>List item 2.2
                                    <ol>
                                        <li>List item 2.2.1</li>
                                        <li>List item 2.2.2</li>
                                    </ol>
                                </li>
                                <li>List item 2.3</li>
                                <li>List item 2.4</li>
                            </ol>
                        </li>
                        <li>List item 3</li>
                        <li>List item 4</li>
                    </ol>
                    <p class="panel radius5"><strong>Unordered list</strong></p>
                    <ul class="unstyled">
                        <li>List item 1</li>
                        <li>List item 2
                            <ul class="square">
                                <li>List item 2.1</li>
                                <li>List item 2.2
                                    <ul class="circle">
                                        <li>List item 2.2.1</li>
                                        <li>List item 2.2.2</li>
                                    </ul>
                                </li>
                                <li>List item 2.3</li>
                                <li>List item 2.4</li>
                            </ul>
                        </li>
                        <li>List item 3</li>
                        <li>List item 4</li>
                    </ul>
                    <p class="panel radius5"><strong>Description list</strong></p>
                    <dl>
                        <dt>Description name</dt>
                        <dd>Description value</dd>
                        <dt>Description name</dt>
                        <dd>Description value</dd>
                        <dt>Description name</dt>
                        <dd>Description value</dd>
                    </dl>
                </div>
                <div class="six columns">
                    <p class="panel radius5 small"> <code><strong>Markup:</strong><br>
                        The example markup would be placed here... </code> </p>
                </div>
            </div>
            <div class="row">
                <div id="media" class="twelve columns">
                    <h4>Media <a href="#top" class="right scroll small">^ Top</a></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns vid_col">
                    <p class="panel radius5"><strong>Image</strong></p>
                    <img src="http://media.tumblr.com/tumblr_lquviiJOmD1qkkcr1.gif" alt="Ice cream facial" class="add_bottom">
                    <p class="panel radius5"><strong>iframe (Vimeo)</strong></p>
                    <iframe src="http://player.vimeo.com/video/31360102?title=0&amp;byline=0&amp;portrait=0" frameborder="0" class="add_bottom" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                    <p class="panel radius5"><a href="http://www.w3schools.com/html5/html5_audio.asp" title="w3schools html5 Audio" target="_blank"><strong>Audio (html5)</strong></a></p>
                    <audio preload controls class="add_bottom">
                        <source src="http://www.w3schools.com/html5/horse.ogg" type="audio/ogg">
                        <source src="http://www.w3schools.com/html5/horse.mp3" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                    <p class="panel radius5"><strong>SVG</strong></p>
                    <svg style="width:100px; height:100px;">
                        <circle cx="100" cy="100" r="100" fill="#ff7900">
                    </svg>
                </div>
                <div class="six columns vid_col">
                    <p class="panel radius5"><strong>iframe (YouTube)</strong></p>
                    <iframe src="http://www.youtube.com/embed/t2xdr_8Lrzg" class="add_bottom" frameborder="0" allowfullscreen></iframe>
                    <p class="panel radius5"><strong>Flash (Embed)</strong></p>
                    <embed src="http://www.youtube.com/v/BI4UJyyIfws?version=3&amp;hl=en_US" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" class="add_bottom"></embed>
                    <p class="panel radius5"><a href="http://www.w3schools.com/html5/html5_video.asp" title="w3schools html5 Video" target="_blank"><strong>Video (html5)</strong></a></p>
                    <video preload controls>
                        <source src="http://html5demos.com/assets/dizzy.mp4" type="video/mp4">
                        <source src="http://html5demos.com/assets/dizzy.mp4" type="video/mp4">
                        <source src="http://html5demos.com/assets/dizzy.ogv" type="video/ogv">
                        Your browser does not support the video tag.
                    </video>
                    
                </div>
            </div>
            <div class="row">
                <div id="buttons" class="twelve columns">
                    <h4>Buttons <a href="#top" class="right scroll small">^ Top</a></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <p><strong>* = Defaults</strong></p>
                    <p><strong>Border Radius</strong></p>
                    <a href="#" class="button">No radius*</a> <a href="#" class="radius2 button">Radius2</a> <a href="#" class="radius5 button">Radius5</a> <a href="#" class="radius10 button">Radius10</a> <a href="#" class="round button">Round</a><br>
                    <p><strong>Sizes</strong></p>
                    <a href="#" class="small radius5 button">Small</a> <a href="#" class="radius5 button">Medium*</a> <a href="#" class="large radius5 button">Large</a><br>
                    <a href="#" class="full_width radius5 button text_center">full_width</a><br>
                    <p><strong>Colors</strong></p>
                    <a href="#" class="red radius5 shadow button">Red</a> <a href="#" class="green radius5 shadow button">Green</a> <a href="#" class="blue radius5 shadow button">Blue</a> <a href="#" class="white radius5 shadow button">White</a> <a href="#" class="radius5 shadow button">Gray*</a> <a href="#" class="black radius5 shadow button">Black</a><br>
                    <a href="#" class="medium radius5 disabled button">Disabled btn</a><br>
                </div>
                <div class="six columns">
                    <p class="panel radius5 small"> <code><strong>Markup:</strong><br>
                        <span class="green">&lt;!-- Just add .button to an anchor --&gt;</span><br>
                        &lt;a href="#" class="<span class="red">button</span>">Here is a button&lt;/a&gt;<br>
                        <br>
                        <span class="green">&lt;!-- Also works on plain button elements --&gt;</span><br>
                        <span class="red">&lt;button&gt;</span>Click Me<span class="red">&lt;/button&gt;</span><br>
                        <br>
                        <span class="green">&lt;!-- Take up full_width of a container --&gt;</span><br>
                        &lt;a href="#" class="<span class="red">button full_width</span>">Here is a button that's full_width&lt;/a&gt; </code> </p>
                </div>
            </div>
            <div class="row">
                <div id="columns" class="twelve columns">
                    <h4>12 column grid <a href="#top" class="right scroll small">^ Top</a></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns"> For examples of column combinations, <a href="columns.php" title="full columns examples">see all the columns examples</a>. </div>
                <div class="six columns">
                    <p>All columns within a .row must add up to 12. All columns are percentages, hence relative to the space your defining.</p>
                    <p class="panel radius5 small"> <code><strong>Markup:</strong><br>
                        <span class="green">&lt;!-- Start .row class --&gt;</span><br>
                        &lt;div class="<span class="red">row</span>"&gt;<br>
                        <br>
                        <span class="green">&lt;!-- Start .four.columns --&gt;</span><br>
                        &lt;div class="<span class="red">four columns</span>"&gt;<br>
                        <span style="padding-left: 20px;">The content for four columns.</span><br>
                        &lt;/div&gt;<br>
                        <br>
                        <span class="green">&lt;!-- Start .eight.columns --&gt;</span><br>
                        &lt;div class="<span class="red">eight columns</span>"&gt;<br>
                        <span style="padding-left: 20px;">The content for eight columns.</span><br>
                        &lt;/div&gt;<br>
                        <br>
                        <span class="green">&lt;!-- End .row class --&gt;</span><br>
                        &lt;/div&gt; </code></p>
                </div>
            </div>
            <div class="row">
                <div id="forms" class="twelve columns">
                    <h4>Forms <a href="#top" class="right scroll small">^ Top</a></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="six columns">
                    <form action="#">
                        
                        <label for="regularInput">Regular input</label>
                        <input type="text" id="regularInput" placeholder="Input label hint">
                        
                        <label for="disabledInput">Disabled input</label>
                        <input type="text" class="disabled" disabled="disabled" id="disabledInput" placeholder="Input label hint">
                        
                        <label for="regularTextarea">Regular textarea</label>
                        <textarea id="regularTextarea" placeholder="Textarea label hint"></textarea>
                        
                        <label for="selectList">Select</label>
                        <select id="selectList">
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                            <option value="Option 3">Option 3</option>
                        </select>
                        <p><strong>Checkboxes</strong></p>
                        <label class="checkbox" for="checkbox1">
                            <input name="checkbox1" type="checkbox" id="checkbox1"> Checkbox 1
                        </label>
                        <label class="checkbox" for="checkbox2">
                            <input name="checkbox2" type="checkbox" id="checkbox2"> Checkbox 2
                        </label>
                    
                        <p><strong>Radios</strong></p>
                        <label class="radio" for="radio1">
                            <input name="radio_group" type="radio" id="radio1"> Radio Button 1
                        </label>
                        <label class="radio" for="radio2">
                            <input name="radio_group" type="radio" id="radio2"> Radio Button 2
                        </label>                        
                        <button type="submit" class="button green round transition shadow">Submit Form</button>
                    </form>
                </div>
                <div class="six columns">
                    <p class="panel radius5 small"> <code><strong>Markup:</strong><br>
                        The example markup would be placed here... </code> </p>
                </div>
            </div>
        <!-- End of right column --> 
    </div>
    <!-- End of the page content -->
</div>
<!-- End of the container -->

<?php include("footer.php"); ?>