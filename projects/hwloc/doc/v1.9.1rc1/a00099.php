<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.8 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#enum-members">Enumerations</a>  </div>
  <div class="headertitle">
<div class="title">Components and Plugins: Generic components</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00032.php">hwloc_component</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga0aebfa65317af10bb18d7d35f6dc05b8"><td class="memItemLeft" align="right" valign="top">typedef enum <a class="el" href="a00099.php#ga397a1bf7d21dd073320ad0045340f463">hwloc_component_type_e</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga0aebfa65317af10bb18d7d35f6dc05b8">hwloc_component_type_t</a></td></tr>
<tr class="separator:ga0aebfa65317af10bb18d7d35f6dc05b8"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="enum-members"></a>
Enumerations</h2></td></tr>
<tr class="memitem:ga397a1bf7d21dd073320ad0045340f463"><td class="memItemLeft" align="right" valign="top">enum &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00099.php#ga397a1bf7d21dd073320ad0045340f463">hwloc_component_type_e</a> { <a class="el" href="a00099.php#gga397a1bf7d21dd073320ad0045340f463a5d6e561f467fe9795a29e7368b613900">HWLOC_COMPONENT_TYPE_DISC</a>, 
<a class="el" href="a00099.php#gga397a1bf7d21dd073320ad0045340f463adea00cd839c2141c032e1569fd5592bd">HWLOC_COMPONENT_TYPE_XML</a>
 }</td></tr>
<tr class="separator:ga397a1bf7d21dd073320ad0045340f463"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Typedef Documentation</h2>
<a class="anchor" id="ga0aebfa65317af10bb18d7d35f6dc05b8"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef enum <a class="el" href="a00099.php#ga397a1bf7d21dd073320ad0045340f463">hwloc_component_type_e</a>  <a class="el" href="a00099.php#ga0aebfa65317af10bb18d7d35f6dc05b8">hwloc_component_type_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Generic component type. </p>

</div>
</div>
<h2 class="groupheader">Enumeration Type Documentation</h2>
<a class="anchor" id="ga397a1bf7d21dd073320ad0045340f463"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">enum <a class="el" href="a00099.php#ga397a1bf7d21dd073320ad0045340f463">hwloc_component_type_e</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Generic component type. </p>
<table class="fieldtable">
<tr><th colspan="2">Enumerator</th></tr><tr><td class="fieldname"><a class="anchor" id="gga397a1bf7d21dd073320ad0045340f463a5d6e561f467fe9795a29e7368b613900"></a>HWLOC_COMPONENT_TYPE_DISC&#160;</td><td class="fielddoc">
<p>The data field must point to a struct <a class="el" href="a00033.php" title="Discovery component structure. ">hwloc_disc_component</a>. </p>
</td></tr>
<tr><td class="fieldname"><a class="anchor" id="gga397a1bf7d21dd073320ad0045340f463adea00cd839c2141c032e1569fd5592bd"></a>HWLOC_COMPONENT_TYPE_XML&#160;</td><td class="fielddoc">
<p>The data field must point to a struct hwloc_xml_component. </p>
</td></tr>
</table>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
