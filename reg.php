<?php
//$text = '<p 5ag>Verslo <strong><p f3jhk dasf>centrai</strong> Lietuvos <p>Nekilnojamojo turto plėtros</p> asociacijos konkurse ... </p>';

$text = '<ol>
    <li><span styl="">What insight, principle, or observation from this weekend’s message did you find to be most helpful, eye-opening, or troubling? Explain.</span></li>
</ol>
&nbsp;

&nbsp;
<ol start="2">
    <li><span style="font-size: medium;">Pastor Keith opened by mentioning that most people he talks to say that they are busy no matter what time of the year. Is there a time of the year that’s more or less busy for you or do you feel always busy? What was the busiest and/or most un-busy time of your life?</span></li>
</ol>
&nbsp;

&nbsp;
<ol start="3">
    <li><span style="font-size: medium;">The passage this week was Ephesians 6:10-12. How does this scripture impact your understanding of busyness?</span></li>
</ol>
&nbsp;

&nbsp;

&nbsp;
<ol>
<ol type="a">
    <li><span style="font-size: medium;">If you read further, up to verse 20, Paul talks about putting on the armour of God. What is your understanding of this passage?</span></li>
</ol>
</ol>
&nbsp;

&nbsp;
<ol>
<ol start="2" type="a">
    <li><span style="font-size: medium;">How might the armour of God be applied to busyness in your life?</span></li>
</ol>
</ol>
&nbsp;

&nbsp;
<ol start="4">
    <li><span style="font-size: medium;">This week it was taught that one of the lies about busyness is that it is merely a temporal thing and has no wider spiritual or eternal implications. Do you agree with this? Why or why not? </span></li>
</ol>
&nbsp;
<ol>
<ol type="a">
    <li><span style="font-size: medium;">Have you ever falling into the trap of believing this yourself? Explain.</span></li>
</ol>
</ol>
&nbsp;

&nbsp;
<ol>
<ol start="2" type="a">
    <li><span style="font-size: medium;">What are the potential negative consequences of believing this, and have you experienced those consequences?</span></li>
</ol>
</ol>
&nbsp;

&nbsp;
<ol>
<ol start="3" type="a">
    <li><span style="font-size: medium;">What are somethings you can do to combat believing this lie?</span></li>
</ol>
</ol>
&nbsp;

&nbsp;
<ol start="5">
    <li><span style="font-size: medium;">According to the Bible (Mat 28:18-20) our mission is to be disciples making disciples. This is also the mission of our church “To make followers of Jesus who love God and others selflessly.” How does busyness hinder that from happening? Have you noticed this is your life or in the lives of those around you.</span></li>
</ol>
&nbsp;

&nbsp;
<ol start="6">
    <li><span style="font-size: medium;">In the sermon this week, it was taught that busyness is not a surface level issue and therefore cannot be fixed by simply trying to manage our schedules. Do you agree with this? Why or why not?</span></li>
</ol>
&nbsp;

&nbsp;

&nbsp;
<ol start="7">
    <li><span style="font-size: medium;">Pastor Keith taught that it is only by the power of the Holy Spirit that we can truly fight our busyness. How do you understand this?</span></li>
</ol>
&nbsp;

&nbsp;
<ol>
<ol type="a">
    <li><span style="font-size: medium;">How might this look in practice?</span></li>
</ol>
</ol>
&nbsp;

&nbsp;

<span style="font-size: medium;"><strong>This Week’s Challenge:</strong></span>

<span style="font-size: medium;"> Reflect on how busyness hinders your discipleship and the discipleship of others. Pray to God to help you through His Holy Spirit to overcome busyness this week. Then take time every day to be in with God in His Word and in prayer no matter how busy you are. At the e</span>';

$text = preg_replace_callback('[<span>|<span\040[\pL\d\040\pZs\pP\pM=]+>|&nbsp;|</span>]', function ($matches) {
    return ''; } , $text);
var_dump($text);


?>
