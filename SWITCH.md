# THE PHP-SWITCH STATEMENT
The <code>switch</code> statement is used to perform different actions based on different conditions.<br>

<h3>The PHP switch Statement</h3>
Use the <code>switch</code> statement to select one of many blocks of code to be executed.<br>

<code>switch(expression) {</code><br>
<code>case label1:</code><br>
<code>//code bocj</code><br>
<code>break;</code><br>
<code>case label2:</code><br>
<code>//code block;</code><br>
<code>break;</code><br>
<code>default:</code><br>
<code>//code block</code><br>
<code>}</code><br>
<br>

This is how it works:<br>
<ul>
  <li>The expression is evaluated once</li>
  <li>The value of the expression is compared with the values of each case.</li>
  <li>If there is a match, the associated block of code is executed.</li>
  <li>The break keyword breaks out of the switch block</li>
  <li>The default code block is executed if there is no match</li>
</ul>
<br>
<br>

<h3>The break keyword</h3>
When PHP reaches a <code>break</code> keyword, it breaks out of the switch block.<br>
This will stop the execution of more code, and no more cases are tested.<br>
The last block does not need a break, the block breaks(ends) there anyway.<br>

<h3>The default Keyword</h3>
The default keyword specifies the code to run if there is no case match:<br>

