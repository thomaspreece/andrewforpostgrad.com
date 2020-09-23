<?php

$MetaDescription="Andrew Thompson is an MA History student who is running for position of Postgraduate Officer at the University of Warwick.";
$MetaKeywords="andrew,thompson,postgrad,warwick,students,union,su,elections,manifesto";
$MetaTitle="Manifesto - AndrewForPostgrad.com";
$PageName="Manifesto.php";
include('Includes/Header.php');

?>



<span class='Title'>Policies</span>
<ul style='list-style-type:decimal'>
<li><a class='PolicyLink' href='#Policy1'>Study spaces on campus are not open long enough</a></li>
<li><a class='PolicyLink' href='#Policy2'>Undergraduates have no incentive to stay on at Warwick for Postgraduate Study</a></li>
<li><a class='PolicyLink' href='#Policy3'>Campus shuts down during the holidays</a></li>
<li><a class='PolicyLink' href='#Policy4'>The pay Postgraduates receive for marking is not fair</a></li>
<li><a class='PolicyLink' href='#Policy5'>Many Postgraduate students, especially International students, cannot physically attend housing days</a></li>
<li><a class='PolicyLink' href='#Policy6'>Postgraduates often aren't seen as part of a Warwick-wide community, and the SU fails to organise events at times suitable for Postgraduate students</a></li>
</ul>

<a id="Policy1"></a>
<table width='100%'>
<tr>
<td>
<span class='Title'>Study spaces on campus are not open long enough</span>
<ul class='italics'>
<li>The library should be open 24/7, all year round, and not just in term three.</li>
<li>There should be extended opening hours for the PG Hub, including at weekends.</li>
</ul>
<p>The Library currently opens 24/7 in term three, however there is no logistical reason why it could not be open all year round. In order to keep the library open between midnight and eight o'clock, two stewards and a senior steward would have to be on duty. Although this has a cost, overall this would be equivalent to less than 1% of the overall library income, or &#163;4.25 per student.</p>
<p>With regards to the Postgraduate hub, the fact that the student reception has moved to Senate House means the receptionists provide an appropriate amount of security to allow the Postgraduate Hub to open at weekends with almost no costs associated.</p>
</td>
<td>
<div class='image'><img  src='Images/Image1.jpg'/><br/><img src='Images/Image2.jpg'/></div>
</td>
</tr>
</table>

<a id="Policy2"></a>
<table width='100%'>
<tr>
<td>
<div class='image'><img src='Images/Image3.jpg'/><br/><img src='Images/Image4.jpg'/></div>
</td>
<td>
<span class='Title'>Undergraduates have no incentive to stay on at Warwick for Postgraduate Study</span>
<ul class='italics'>
<li>There should be discounts on course fees for students who go on to do Postgraduate study who completed their undergraduate study at Warwick.</li>
</ul>
<p>Warwick has a relatively poor retention rate for students staying on to Postgraduate study and is keen to address this problem.</p>
</td>

</tr>
</table>

<a id="Policy3"></a>
<table width='100%'>
<tr>
<td>
<span class='Title'>Campus shuts down during the holidays</span>
<ul class='italics'>
<li>SU facilities should have consistent opening times throughout the holidays, that are based around the needs of students and not conference delegates.</li>
<li>Happy Hour prices should be available and promoted to students during all holiday periods (as I put forward in Student Council in the Happy Hour Motion).</li>
</ul>
<p>Facilities such as the Terrace Bar require low levels of staff cover in order to remain open and by working closely with the venue managers I would seek to expand the opening times and ensure they remain consistent throughout the holiday periods. </p>
<p>In my Happy Hour Motion, it made the provisions that the Students' Union had to continue its drink promotions for students in its outlets outside of Undergraduate term time, as long as a valid Warwick Uni ID card is presented. This has been great, but it has not been promoted to Postgraduates, so students are paying more than they should have to.</p>
</td>
<td>
<div class='image'><img  src='Images/Image5.jpg'/><br/><img src='Images/Image6.jpg'/></div>
</td>
</tr>
</table>

<a id="Policy4"></a>
<table width='100%'>
<tr>
<td>
<div class='image'><img src='Images/Image7.jpg'/><br/><img src='Images/Image8.jpg'/></div>
</td>
<td>
<span class='Title'>The pay Postgraduates receive for marking is not fair</span>
<ul class='italics'>
<li>All Postgraduate students who mark should receive a proper contract.</li>
<li>Departments ought to set out how much time should be spent for marking each type of script.</li>
<li>The pay for marking should be based on the time spent, as opposed to purely the number of scripts marked</li>
</ul>
<p>The University is currently looking at a solution to the issue of Postgraduate pay. I will continue to represent the needs of Postgraduate students in this important issue until a resolution has been reached.</p>
</td>

</tr>
</table>

<a id="Policy5"></a>
<table width='100%'>
<tr>
<td>
<span class='Title'>Many Postgraduate students, especially International students, cannot physically attend housing days.</span>
<ul class='italics'>
<li>The SU should establish a virtual housing forum to provide advice about where to live and what types of accommodation are available.</li>
</ul>
<p>This year the SU established an online book sale platform and is the owner of Membership Solutions Ltd, a computer software design company. We therefore have the resources and technical skills within the University to be able to deliver such a forum.</p>
</td>
<td>
<div class='image'><img src='Images/Image9.jpg'/><br/><img src='Images/Image10.jpg'/></div>
</td>
</tr>
</table>

<a id="Policy6"></a>
<table width='100%'>
<tr>
<td>
<div class='image'><img src='Images/Image11.jpg'/><br/><img src='Images/Image12.jpg'/><img src='Images/Image13.jpg'/></div>
</td>
<td>
<span class='Title'>Postgraduates often aren't seen as part of a Warwick-wide community, and the SU fails to organise events at times suitable for Postgraduate students.</span>
<ul class='italics'>
<li>The SU should organise more events in the evenings, taking into consideration Postgraduate timetables.</li>
<li>We should start talking about a Warwick-wide community, and stop seeing Postgraduates as a different species altogether.</li>
</ul>
<p></p>
</td>

</tr>
</table>

<div style='height:200px;'></div>


<script type="text/javascript">
$(".PolicyLink").click(function (event) {
    event.preventDefault();
    //calculate destination place
    var dest = 0;
    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
        dest = $(document).height() - $(window).height();
    } else {
        dest = $(this.hash).offset().top;
    }
    //go to destination
    $('html,body').animate({
        scrollTop: dest
    }, 1000, 'swing');
});
</script>


<?php include('Includes/Footer.php'); ?>
