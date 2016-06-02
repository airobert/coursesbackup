<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <link rel="stylesheet" href="../../static/courses.css" type="text/css">
    <link rel="shortcut icon" href="../../../static/img/favicon.ico" type="image/x-icon">

    <title>Information Theory - UvA course - Fall 2014</title>
</head>

<body>
<div id="content">
<h1>Information Theory 2014</h1>

<div id="topbox">
    <div class="subbox">
        <a href="http://www.uva.nl">University
            of Amsterdam course</a>, Fall 2014<br>
        <a href="http://www.illc.uva.nl/MScLogic/">Master of Logic</a>

        <div id="lecturer">
            Lecturer: <a href="http://homepages.cwi.nl/%7Eschaffne">Christian
                Schaffner</a> (<a href="http://www.uva.nl/">UvA</a> / <a
                href="http://homepages.cwi.nl/%7Eschaffne/contact.php">email</a>)
            <br>
            Teaching assistant: <a
                href="http://www.uva.nl/over-de-uva/organisatie/medewerkers/content/s/c/p.schulz/p.schulz.html">
                Philip Schulz</a> (<a href="mailto:P.Schulz@uva.nl">email</a>)
        </div>
    </div>

    <div class="subbox">
    <h4>News:</h4>
    30 Nov 2014: Philip added some more topics to the <a href="exam.php">list of topics</a> for the final presentations.<br />
    26 Nov 2014: The final <a href="#exam">exam</a> will consist of student presentations. Check the <a href="exam.php">list of topics</a> here.<br />
    27 Oct 2014: <a target="_blank" href="https://medium.com/@cshirky/why-i-just-asked-my-students-to-put-their-laptops-away-7f5f7c50f368">Good reasons</a> to put away your mobile phone during class<br />
    </div>

    <div class="subbox">
        See <a href="../2013/">here for the Spring 2014 edition</a> of
        this course.
    </div>

</div>


<h2 id="start_of_text">Content of the course</h2>
<a target="_blank" href="http://en.wikipedia.org/wiki/Information_theory">Information theory</a> was developed by
<a href="https://en.wikipedia.org/wiki/Claude_Shannon" target="_blank">Claude
E. Shannon</a> in the 1950s to investigate the fundamental limits on signal-processing operations such as compressing data
and on reliably storing and communicating data. These tasks have turned out to be fundamental for all of computer
science.
<p>
    In this course, we quickly review the basics of (discrete) probability theory and introduce concepts such as (conditional)
    Shannon entropy, mutual information and Renyi entropy. Then, we prove Shannon's theorems about data compression and
    channel coding. In the course, we also cover some aspects of information-theoretic security and show applications
    of information theory to the area of machine learning.
</p>

<h2>Intended Learning Outcomes</h2>
At the end of the course, you are able to
<ul>
    <li>Define Shannon entropy and Mutual Information and compute these quantities on examples.</li>
    <li>Work with joint discrete random variables (conditioning, Bayes' rule)</li>
    <li>Define basic discrete probability distributions (Bernoulli, Binomial, Geometric) and compute their expected
        value and variance
    </li>
    <li>State Jensen's inequality for convex and concave functions and use it in proofs</li>
    <li>Use entropy diagrams to read off and find new relations between entropic quantities</li>
    <li>Prove Shannon's theorem about perfectly secure encryption (e.g. by using an entropy diagram)</li>
    <li>Define typical and jointly typical sets, prove properties about their size and probability mass and know how
        they are used in source coding and channel coding
    </li>
    <li>Use Kraft's inequality e.g. to check if a prefix-free code exists for given codeword lengths</li>
    <li>Compute a d-ary Huffman code</li>
    <li>Describe how much a given source can be compressed and give a way to do it</li>
    <li>Prove properties about Arithmetic Codes</li>
    <li>Find the confusability graph of a given channel, and find channels for a given confusability graph</li>
    <li>Compute the independence number and (zero-error) Shannon capacity of a given confusability graph</li>
    <li>Compute the capacity and maximizing input distribution of a given channel</li>
    <li>Define basic channels (binary symmetric, erasure channel)</li>
    <li>State Shannon's noisy channel-coding theorem and and understand the key ingredients of the proof</li>
    <li>Grasp definitions of types of entropy different than Shannon entropy</li>

    <!-- <li>select, summarize and defend a more advanced topic in information theory</li>
     <li>relate and compare that advanced topic with material in the course </li>
     <li>State Hoeffding's inequality and recognize situations where it can be employed</li>
    <li>Grasp the purpose of privacy amplification</li>
    <li>Check whether a given function family is two-universal</li> -->


</ul>


<h2>Course website</h2>
Updated information about the course can be found on <a
    href="http://homepages.cwi.nl/~schaffne/courses/inftheory/2014/">http://homepages.cwi.nl/~schaffne/courses/inftheory/2014/</a>

<h2>Study Material</h2>
The material will be presented in black-boards lectures. The following are good references:
<ul>
    <li>[CF] Ronald Cramer, Serge Fehr: <a href="notes/CramerFehr.pdf">The
            Mathematical Theory of Information, and Applications</a>, lecture notes, Version 2.0
    </li>
    <li>[CT] Thomas M. Cover, Joy A. Thomas. <a target="blank"
                                                href="http://onlinelibrary.wiley.com/book/10.1002/0471200611">Elements
            of information theory</a>, 2nd Edition. New York: Wiley-Interscience, 2006. ISBN 0-471-24195-4.
    <li>[MacKay] David J. C. MacKay. <a target="blank" href="http://www.inference.phy.cam.ac.uk/mackay/itila/book.html">Information
            Theory, Inference, and Learning Algorithms</a>. Cambridge: Cambridge University Press, 2003. ISBN
        0-521-64298-1
</ul>


<h2>Lectures and Exercise sessions (2 x 45min each)</h2>
please check <a target="_blank" href="https://datanose.nl/#course[24607]">Datanose</a> for the
definite times and locations.<br>

<!-- <a name="location"></a>
<b>Lectures (Hoorcollege)</b><br>
Times: Tuesdays, 11-13, location: Science Park G0.05<br>
Thursdays, 11-13, location: check <a
href="https://datanose.nl/#course[22718]">Datanose</a><br>
starting 4 February 2013<br>
<br>

<b>Exercises (Werkcollege)</b><br>
Time: Fridays 9-11, location: check <a
href="https://datanose.nl/#course[22718]">Datanose</a><br>
first exercises: 7 February 2013<br>
<br> -->


<h2>Homework, exam, and grading</h2>

This is a 6 ECTS course, which comes to roughly 20 hours of work per
week.

<p> There will be homework exercises every week
    to be handed in one week later. The answers should be in English. Feel free to use LaTeX, here is a <a
        href="HW-template.tex">template</a> to get you started, but readable handwritten solutions
    are fine, too. Cooperation while solving the exercises is allowed and
    encouraged, but everyone has to hand in their own solution set in
    their own words. <a name="exercises"></a>

<p><a name="exam"></a>
    <!-- </b>There will be a final written exam
    on Friday, March 28, 2014, from 9:00-12:00 in SP, G2.02</b>.-->
<!--    The exam is open-book, meaning that you can bring the study material [CF], [CT],-->
<!--    [MacKay] mentioned above as well as any notes you made, but no electronic devices are allowed.-->

    <b>The final exam will consist of student presentations
    about slightly more advanced topics connected to the course. The detailed
     procedure and list of topics can be found <a href="exam.php">here</a>.</b>

<p> The final grade for the course consists by 1/2 of the average homework grade (ignoring the worst grade) and 1/2 of
    the grade obtained at the final exam.

<h2>Course schedule Fall 2014</h2>

<table id="schedule">
    <thead>
    <tr>
        <th>Date</th>
        <th>Content</th>
        <th>Homework</th>
    </tr>
    </thead>

    <tr>
        <td>Mon, 27 Oct</td>
        <td>
            <p>Overview of the course, Probability Theory</p>
            <p>Section 2.1 of [CF]</p>
            <p><a href="InfTheory_L1.pdf">Slides #1</a></p>
            <p><a href="blackboard/InfTheory-L1-1.jpg">Blackboard Photo 1</a> &nbsp;
               <a href="blackboard/InfTheory-L1-2.jpg">Photo 2</a> &nbsp;
               <a href="blackboard/InfTheory-L1-3.jpg">Photo 3</a>
            </p>
        </td>
        <td></td>
    </tr>

    <tr>
        <td>Wed, 29 Oct</td>
        <td>
            <p>Shannon Entropy, Jensen's inequality, Properties of Shannon entropy</p>
            <p>Sections 3.1-3.3 of [CF]</p>
            <p><a href="InfTheory_L2.pdf">Slides #2</a></p>
            <p><a href="blackboard/InfTheory-L2-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L2-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L2-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L2-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L2-5.jpg">Photo 5</a> &nbsp;
                <a href="blackboard/InfTheory-L2-6.jpg">Photo 6</a>
            </p>
        </td>
        <td>
            <a href="inf14fall-ex1.pdf">Exercises #1</a>
        </td>
    </tr>


    <tr>
        <td>Mon, 3 Nov</td>
        <td>
            <p>Chain Rule, Mutual Information, Entropy Diagrams, Markov Chains</p>

            <p>Sections 3.3, 3.4 of [CF], Sections 2.5, 2.8 of [CT]</p>
            <p><a href="blackboard/InfTheory-L3-1.jpg">Blackboard Photo 1</a> &nbsp;
               <a href="blackboard/InfTheory-L3-2.jpg">Photo 2</a> &nbsp;
               <a href="blackboard/InfTheory-L3-3.jpg">Photo 3</a> &nbsp;
               <a href="blackboard/InfTheory-L3-4.jpg">Photo 4</a> &nbsp;
               <a href="blackboard/InfTheory-L3-5.jpg">Photo 5</a> &nbsp;
               <a href="blackboard/InfTheory-L3-6.jpg">Photo 6</a>
            </p>
            <p class="hidden"><a href="Heads1.pdf">Slides #1</a></p>
        </td>
        <td><a class="hidden" href="crypto14-hw1.pdf">Homework #1</a></td>
    </tr>

    <tr>
        <td>Wed, 5 Nov</td>
        <td>
            <p>Data-Processing Inequality, Sufficient Statistics, Perfectly Secure Encryption:
                One-time pad</p>

            <p>Sections 2.8-2.9 of [CT], Section 4 of [CF]</p>
            <p><a href="blackboard/InfTheory-L4-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L4-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L4-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L4-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L4-5.jpg">Photo 5</a>
            </p>
        </td>
        <td><a href="inf14fall-ex2.pdf">Exercises #2</a></td>
    </tr>


    <tr>
        <td>Mon, 10 Nov</td>
        <td>
            <p>Perfectly Secure Encryption: Shannon's theorem. Fano's inequality. Data compression / Source coding</p>

            <p>Section 4 of [CF], Sections 2.10 and 3.1 of [CT]</p>
            <p><a target="_blank" href="http://b.cryptosmith.com/2008/05/31/stream-reuse/">Insecurity of Key Reuse in OTP</a></p>
            <p>
                <a target="_blank" href="https://docs.google.com/spreadsheet/ccc?key=0Am3l5NEdfBL3dGYyMjBvSUltYVExQjlZRkZGcThOS3c&usp=sharing">Entropy of Alice in Wonderland</a>&nbsp;
                <a target="_blank" href="http://en.webhex.net/">Hex Editor with statistics</a>&nbsp;
            </p>
            <p><a href="blackboard/InfTheory-L5-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L5-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L5-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L5-4.jpg">Photo 4</a>
            </p>

        </td>
        <td><a class="hidden" href="crypto14-hw1.pdf">Homework #1</a></td>
    </tr>

    <tr>
        <td>Wed, 12 Nov</td>
        <td>
            <p>Data Compression: Asymptotic Equipartition Property, Typical set, Source-coding Theorem, high-probability set</p>

            <p>Section 3.2+3.3 of [CT]</p>
            <p><a href="blackboard/InfTheory-L6-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L6-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L6-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L6-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L6-5.jpg">Photo 5</a>
            </p>

            <p><a href="InfTheory_L6.pdf">Slides #6</a></p>
        </td>
        <td><a href="inf14fall-ex3.pdf">Homework #3</a></td>
    </tr>

    <tr>
        <td>Mon, 17 Nov</td>
        <td>
            <p>Data Compression: symbol codes, properties, source-coding theorem reloaded, Kraft's inequality</p>

            <p>Section 5 of [CF], Chapter 5 of [CT], Chapter 5 of [MacKay]</p>
            <p><a href="blackboard/InfTheory-L7-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L7-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L7-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L7-4.jpg">Photo 4</a>
            </p>
            <p><a href="InfTheory_L7.pdf">Slides #7</a></p>
        </td>
        <td><a class="hidden" href="crypto14-hw1.pdf">Homework #1</a></td>
    </tr>

    <tr id="flipped">
        <td>Wed, 19 Nov</td>
        <td>
            <p>Huffman codes and their optimality, Game of 20 Questions, Arithmetic Codes</p>

            <p>Section 5.4+5.5 of [CF], Section 6.2 of [MacKay]</p>

            <p><a href="http://www.20q.net/" target="_blank">Online Game of 20 questions</a></p>
            <p><a href="arithmetic_coding.pdf">Slides</a> from
                <a target="_blank" href="http://www.uva.nl/over-de-uva/organisatie/medewerkers/content/m/a/m.w.madsen/m.w.madsen.html">Mathias Madsen</a>'s
                <a target="_blank" href="http://informationtheory.weebly.com/">course on information theory</a></p>
            <p><a href="blackboard/InfTheory-L8-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L8-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L8-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L8-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L8-5.jpg">Photo 5</a> &nbsp;
                <a href="blackboard/InfTheory-L8-6.jpg">Photo 6</a>
            </p>
        </td>
        <td><a href="inf14fall-ex4.pdf">Homework #4</a></td>
    </tr>

    <tr>
        <td>Mon, 24 Nov</td>
        <td>
            <p>Advantages of Arithmetic Codes, Noisy-Channel Coding, Basic Definitions, Graph Theory</p>

            <p>Pages 4+5 of this <a target="_blank" href="http://alon.ucsd.edu/papers/zer_err_it.ps">survey paper</a>
            </p>
            <p>Section 7.5 of [CT]</p>
            <p><a href="http://www.inference.phy.cam.ac.uk/dasher/" target="_blank">Dasher</a>
             &nbsp;
                <a href="https://en.wikipedia.org/wiki/Petersen_graph" target="_blank">Petersen graph</a> </p>
            <p><a href="blackboard/InfTheory-L9-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L9-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L9-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L9-4.jpg">Photo 4</a> &nbsp;
            </p>
            <p class="hidden"><a href="Heads1.pdf">Slides #1</a></p>
        </td>
        <td><a class="hidden" href="crypto14-hw1.pdf">Homework #1</a></td>
    </tr>

    <tr>
        <td>Wed, 26 Nov</td>
        <td>
            <p>Zero-error channel coding</p>
            <p><a href="https://en.wikipedia.org/wiki/Frucht_graph" target="_blank">Frucht graph</a> </p>
            <p><a href="blackboard/InfTheory-L10-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L10-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L10-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L10-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L10-5.jpg">Photo 5</a> &nbsp;
                <a href="blackboard/InfTheory-L10-6.jpg">Photo 6</a>
            </p>
        </td>
        <td><a href="inf14fall-ex5.pdf">Homework #5</a></td>
    </tr>

    <tr>
        <td>Mon, 1 Dec</td>
        <td>
            <p>Noisy-channel coding: capacity, set-up and proof of converse</p>

            <p>Sections 7.1, 7.4, 7.5, 7.9, 7.12 of [CT]</p>
            <p><a href="blackboard/InfTheory-L11-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L11-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L11-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L11-4.jpg">Photo 4</a> &nbsp;
            </p>
        </td>
        <td><a class="hidden" href="crypto14-hw1.pdf">Homework #1</a></td>
    </tr>

    <tr>
        <td>Wed, 3 Dec</td>
        <td>
            <p>Shannon's theorem about noisy-channel coding
            <p>Sections 7.6, 7.7 of [CT], Chapter 10 of [MacKay]</p>
            <p><a href="blackboard/InfTheory-L12-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L12-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L12-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L12-4.jpg">Photo 4</a> &nbsp;
                <a href="blackboard/InfTheory-L12-5.jpg">Photo 5</a> &nbsp;
                <a href="blackboard/InfTheory-L12-6.jpg">Photo 6</a>
            </p>
            <p><a href="InfTheory_L12.pdf">Slides #12</a></p>
        </td>
        <td><a href="inf14fall-ex6.pdf">Homework #6</a></td>
    </tr>

    <tr>
        <td>Mon, 8 Dec</td>
        <td>
            <p>Source-channel Separation, Error-correcting codes</p>

            <p>Section 7.13 of [CT], Chapter 1 of [MacKay]</p>
            <p><a href="blackboard/InfTheory-L13-1.jpg">Blackboard Photo 1</a> &nbsp;
                <a href="blackboard/InfTheory-L13-2.jpg">Photo 2</a> &nbsp;
                <a href="blackboard/InfTheory-L13-3.jpg">Photo 3</a> &nbsp;
                <a href="blackboard/InfTheory-L13-4.jpg">Photo 4</a> &nbsp;
            </p>
            <p><a href="InfTheory_L13.pdf">Slides #13</a>&nbsp;<a href="InfTheory_L13_2.pdf">Slides #13b</a></p>
        </td>
        <td>
        </td>
    </tr>

    <tr>
        <td>Wed, 10 Dec</td>
        <td>
            <p>Philip Schulz about Information Theory in Machine Translation</p>
        </td>
        <td><a href="inf14fall-ex7.pdf">Homework #7</a></td>
    </tr>

    
    <tr id="presentation">
        <td>Wed, 17 Dec, 10:00-12:30</td>
        <td>
            <table>
                <tr><td>10:00 - 10:30</td><td>Almudena: Uniqueness of the uncertainty measure</td><td><a href="presentations/Almudena_Uncertainty.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
                <tr><td>10:30 - 11:00</td><td>Fangzhou: Kolmogorov Complexity I</td><td><a href="presentations/Fangzhou_Kolmogorov1.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
                <tr><td>11:15 - 11:45</td><td>Jesus: Kolmogorov Complexity II</td><td><a href="presentations/Jesus_Kolmogorov2.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
                <tr><td>11:45 - 12:15</td><td>Giulio: Gambling</td><td><a href="presentations/Giulio_Gambling.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
            </table>
            <p><b>Location: CWI, ground floor of the new wing, room L0.17</b></p>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>Thu, 18 Dec, 13:00-15:00</td>
        <td>
            <table>
                <tr><td>13:00 - 13:30</td><td>Arianna: Wald's Inequality</td><td><a href="presentations/Arianna_Stopping.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
                <tr><td>13:30 - 14:00</td><td>Philip: Expectation-based syntactic comprehension</td><td><a href="presentations/Philip_SentenceComprehension.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
                <tr><td>14:15 - 14:45</td><td>Davide: Code Breaking</td><td><a href="presentations/Davide_Codebreaking.pdf">Slides<img alt="PDF" src="../../static/img/pdf.gif"></a></td></tr>
            </table>
        </td>
        <td>
        </td>
    </tr>

</table>

<a name="lifeafter"></a>

<h2>Life after "Information Theory"</h2>
If you got hooked on the world of entropies, you have several
options after the course to pursue the topics of information theory and cryptography:
<ul>
    <li>Talk to Christian about the possibilities of doing a semester project
        or master project in information theory or cryptography. He can also hook you up with other
        people at the <a href="http://www.illc.uva.nl/People/">ILLC</a>, at <a href="http://www.cwi.nl">CWI</a> or in the rest of the world, working on different
        aspects of information theory.
    </li>
    <li>Follow <a href="http://homepages.cwi.nl/~rdewolf">Ronald de Wolf</a>'s course about <a
            href="http://homepages.cwi.nl/~rdewolf/qc15.html">quantum computing</a> at the
        university of Amsterdam, starting Spring 2015.
    </li>
    <li>Follow <a href="http://www.mastermath.nl/courses/Spring_2015/Cryptology/">this mastermath course</a>
        about crypology by <a href="http://www.marc-stevens.nl">Marc Stevens</a> and
        <a href="http://www.hyperelliptic.org/tanja/">Tanja Lange</a>, starting in Spring 2015.</li>
    <li>Follow <a href="https://www.cwi.nl/people/552">Harry Buhrmans</a>'s course about <a
            href="https://datanose.nl/#course[14942]">computational complexity</a> at the
        university of Amsterdam, starting Fall 2015.
    </li>
    <li>Follow various online classes such as Raymond W. Yeung's <a href="https://class.coursera.org/informationtheory-002">
            Information Theory</a> course,
        Dan Boneh's
        <a href="https://www.coursera.org/course/crypto">
            crypto</a>, <a href="https://www.coursera.org/course/crypto2">crypto II</a>,
        <a href="https://www.coursera.org/course/cryptography">Jon Katz's crypto class</a> or <a
            href="https://www.coursera.org/course/qcomp">Umesh Vazirani's course
            about quantum computing</a>.
    </li>
</ul>


<div id="footer">
    <p>Last update:  &nbsp; &nbsp;
        <span class="disclaimer"><a href="http://www.cwi.nl/disclaimer.html">CWI DISCLAIMER</a></span></p>


    <script type="text/javascript"
            src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>

    <!-- Start of StatCounter Code -->
    <script type="text/javascript" language="javascript">
        <!--
        var sc_project = 1639480;
        var sc_invisible = 1;
        var sc_partition = 15;
        var sc_security = "19c07acf";
        //-->
    </script>

    <script type="text/javascript" language="javascript" src="http://www.statcounter.com/counter/counter.js"></script>
    <noscript><a href="http://statcounter.com/" target="_blank"><img
                src="http://c16.statcounter.com/counter.php?sc_project=1639480&amp;java=0&amp;security=19c07acf&amp;invisible=1"
                alt="website page counter" border="0"></a></noscript>
    <!-- End of StatCounter Code -->

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-23222525-1']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>

</div>

</body>
</html>
