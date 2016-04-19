@extends('layouts.basicPage')

@section('contents')

  <h2 class="pageTitle">Developer information</h2>

  <div class="description">
    <ul>
      <li>Name: Yosuke Ito</li>
      <li>Language: Japanese, English</li>
    </ul>
  </div>

  <h3 class="pageTitle">Work Experiences</h3>

  <!-- 1st start -->
  <div class="description">
    <p>April 2013 - September 2014<p>
    <ul>
      <li>Company Name: Softbank Mobile</li>
      <li>Company Location: Tokyo, Japan</li>
      <li>Role: VBA Software Developer</li>
      <li>Used: Excel VBA, Access VBA and SQL</li>

      <li>Tasks</li>
      <ol>
        <li>Modified and maintained program to monitor each base station's condition, such as active, inactive and suspended</li>
        <li>Embodied interim and outer specification and wrote programs from co-workers' ambiguous ideas as required</li>
        <ul>
          <li>i.e. 1. Outputted an Excel file to build base stations for mobile phones, including check function, such as whether the input and output data was correct</li>
          <li>i.e. 2. Tracked how much is increase and decrease of each base station's environment per week, such as waited, ongoing, built</li>
        </ul>
        <li>Improved existing programs to speed up</li>
        <ul>
          <li>i.e. 1. Extracted base stations whose longitude or latitude is different from a CSV file and stored data in the database, from 1 hour to 5 sec</li>
        </ul>
      </ol>
      <!--
        <a href="/job/softbankmobile">Link to memoriable task</a>
      -->
    </ul>
  </div>
  <!-- 1st end -->

  <!-- 2nd start -->
  <div class="description">
    <p>October 2011 – March 2013<p>
    <ul>
      <li>Company Name: Pasco Corporation</li>
      <li>Company Location: Tokyo, Japan</li>
      <li>Role: Web and VBA Software Developer</li>
      <li>Used: Excel VBA, Outlook VBA, SQL, SQL Server2008, HTML and CSS</li>

      <li>Tasks</li>
      <ol>
        <li>Created web pages on how to book municipal facilities via the reservation system</li>
        <li>Created and executed 200 to 300 test cases from function documents per feature expansion</li>
        <li>Decreased efficiently amount of test cases to one-tenth by applying all-pairs testing</li>
        <li>Embodied internal and outer specification and wrote programs from co-workers' ambiguous idea as required</li>
        <ul>
          <li>i.e. 1. Created a program which shows all Japanese municipal website's URL by web scraping</li>
          <li>i.e. 2. Developed a program to create mail drafts to submit various 40 cities for monthly reporting</li>
          <li>i.e. 3. Wrote a program to output data for a monthly report</li>
        </ul>
      </ol>
      <!--
      <a href="/job/pasco">Link to memoriable task</a>
      -->
    </ul>
  </div>
  <!-- 2nd end -->

  <!-- 3rd start -->
  <div class="description">
    <p>December 2010 - May 2011<p>
    <ul>
      <li>Company Name: SBI Business Support</li>
      <li>Company Location: Tokyo, Japan</li>
      <li>Role: Call Operator and VBA Software Developer</li>
      <li>Used: Access, Excel VBA, Access VBA and SQL</li>

      <li>Tasks</li>

      <ol>
        <li>Taught my boss how to modify existing computer programs</li>
        <li>Input data into computerized databases, spreadsheets or other templates using a keyboard, mouse, or optical scanner, speech recognition software or other data entry tools</li>
        <li>Embodied internal and external specification and wrote programs from co-workers' ambiguous idea as required</li>
        <ul>
          <li>i.e. 1. Wrote a program to output an Excel file as a daily report</li>
        </ul>
      </ol>
      <!--
      <a href="/job/sbi">Link to memoriable task</a>
      -->
    </ul>
  </div>
  <!-- 3th end -->

  <!-- 4th start -->
  <div class="description">
    <p>August 2007 - March 2009<p>
    <ul>
      <li>Company Name: Tri-force Corporation</li>
      <li>Company Location: Tokyo, Japan</li>
      <li>Role: Full Stack Web Developer</li>
      <li>Used:</li>
      <ul>
        <li>Front-End: HTML, CSS, JavaScript</li>
        <li>Back-End: ASP, Excel VBA</li>
        <li>Other: SQL, SQL Server</li>
      </ul>

      <li>Tasks</li>
      <ol>
        <li>Reconstructed an in-house program which is used by a major commercial facilities developer</li>
        <li>Maintained existing computer programs by making modifications as required</li>
        <li>Conducted tests and perform security and quality controls</li>
        <li>Consulted with clients to develop and document web requirements</li>
      </ol>
      <!--
      <a href="/job/triforce">Link to memoriable task</a>
      -->
    </ul>
  </div>
  <!-- 4th end -->

  <!-- 5th start -->
  <div class="description">
    <p>April 2005 - March 2007<p>
    <ul>
      <li>Company Name: Nippon Information Industry Corp.</li>
      <li>Company Location: Tokyo, Japan</li>
      <li>Role: Office jobs and VBA Software Developer</li>
      <li>Used: Excel VBA, Access VBA</li>

      <li>Tasks</li>
      <ul>
        <li>Abridgment because most of jobs are not related to a developer.</li>
      </ul>
      <!--
      <a href="/job/nii">Link to memoriable task</a>
      -->
    </ul>
  </div>
  <!-- 5th end -->

  <h3 class="pageTitle">Education</h3>
  <div class="description">
    <p>January 2015 - Current</p>
    <ul>
      <li>School Name: ITD Canada</li>
      <li>School Location: Vancouver, BC, Canada</li>
      <li>Course Name: IT with Co-op, Graphic and Web Development</li>
      <li>Degree: Diploma</li>
      <li>Learning Subject: HTML, CSS, JavaScript, JQuery, C, C++, C#, VB.Net, ASP, ASP.Net, PHP, SQL</li>
    </ul>
  </div>

  <div class="description">
    <p>April 2003 - March 2005</p>
    <ul>
      <li>School Name: The Information Science College</li>
      <li>School Location: Yokohama, Kanagawa, Japan</li>
      <li>Course Name: Information Processing</li>
      <li>Degree: Diploma</li>
      <li>Learning Subject: HTML, CSS, JavaScript, C, Java, PHP</li>
    </ul>
  </div>
@endsection