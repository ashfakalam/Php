# If-else in PHP 
IF statement- executes some code if one condition is true.<br>
if...else statement-executes some code if a condition is true and another code if that condition is false.<br>
if....elseif....else statement- executes different codes for more than two conditions.
<br>

<h3>PHP-The if Statement</h3>
The <code>if</code> statement executes some code if one consition is true.<br>

<Bold>Syntac</Bold><br>
<code>if(condition){</code><br>
<code>//code to be executed if condition is true;</code><br>
<code>}</code>
<br><br>

<bold>Example: </bold><br>
<code>if(5>3){</code><br>
<code>echo "Have a good day!";</code><br>
<code>}</code><br><br>

<bold>Example 2:</bold><br>
<code>$t=14;</code><br>
<code>if($t<20){</code><br>
<code>echo "Habe a good day!";</code><br>
<code>}</code>
<br><br>

<h3>PHP-The if...else Statement</h3>
The <code>if...else</code> statement executes some code if a condition is true and another code if that condition is false.<br>

<bold>Syntax</bold><br>
<code>if(condition){</code><br>
<code>//code to be executed if condition is true;</code><br>
<code>}else{</code><br>
<code>//code to be executed if condition is false;</code><br>
<code>}</code><br>

<bold>Example 3:</bold><br>
<code>$num=4;</code><br>
<code>if($num%2==0){</code><br>
<code>echo "$num is even Number";</code><br>
<code>}else{</code><br>
<code>echo "$num is odd Number";</code><br>
<code>}</code>
<br><br>

<h3>PHP-The if...elseif...else Statement</h3>
The <code>if...elseif...else</code> statement executes different codes for more than two conditions.<br>

<bold>Syntax</bold><br>
<code>if(condition){</code><br>
<code>//code to be executed if this condition is true;</code><br>
<code>}elseif(condition2){</code><br>
<code>//code to be executed if first condition is false and this condition is true;</code><br>
<code>}else{</code><br>
<code>//code to be executed if all conditions are false;</code><br>
<code>}</code><br>
