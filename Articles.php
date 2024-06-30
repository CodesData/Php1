<?php
  session_start();
  $pagetitle = "Articles";
  require_once ("Includes/header.inc.php");
?>
<!-- page content -->
<div class="container" id="pageContent">
  <div class="row">
    <div class="col-md-9">
      <!-- breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-bars fa-fw"></i></a></li>
          <li class="breadcrumb-item active"><a href="Articles.php">Articles</a></li>
        </ol>
      </nav>
      <!-- Content section -->
      <section class="py-2">
        <h6>Example 1</h6>
<pre class="line-numbers pre-scrollable"><code class="language-csharp">using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Data.SqlClient;

namespace ConsoleApp1
{
  internal class Program
  {
    static void Main(string[] args)
    {      
    }
  }
}</code></pre>
      </section>
      <!-- Content section -->
      <section class="py-5">
        <h6>Example 2</h6>
<pre class="line-numbers pre-scrollable"><code class="language-html">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Document&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
      
  &lt;/body&gt;
  &lt;/html&gt;
</code></pre>
      </section>
    </div>
<?php
  require_once ("Includes/sidebar.inc.php");
  require_once ("Includes/footer.inc.php");
?>