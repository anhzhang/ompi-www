<?php
$topdir = "../..";
$title = "The Open MPI Development Team";

include_once("$topdir/includes/header.inc");
?>

  <p>The Open MPI project has many members, contributors, and partners.
  "Contributors" provide resources to the project such as code (which
  requires having a signed Open MPI 3rd Party Contribution Agreement
  on file -- see <a href="<? print($topdir);
  ?>/community/contribute/">How to Contribute</a> for details),
  testing, hosting services, etc.  "Members" are contributors who have
  voting rights, which entitles them to help determine the direction
  of the project, participate in release processes, etc.  "Partners"
  provide services to the Open MPI project.  See the full definitions
  of these three levels of membership 
  <a href="https://svn.open-mpi.org/trac/ompi/wiki/Admistrative%20rules">here</a>.</p>

  <p>Open MPI contributors who have submitted signed 3rd Party
  Contribution Agreements and members are listed below in alphabetical
  order:</p>

<p>
<center>
<table width="75%" border="<?php print($table_border); ?>" width=100%>
<?php

$member = 0;
$contrib = 1;
$partner = 2;

$num_members = 0;
$num_contribs = 0;
$num_partners = 0;

function print_line() {
    print("<tr><td colspan=5><hr></td></tr>\n\n");
}

class org {
    var $url, $small_org, $big_org, $logo, $level;

    function org($url, $small_org, $big_org, $logo, $level) {
        $this->url = $url;
        $this->small_org = $small_org;
        $this->big_org = $big_org;
        $this->logo = $logo;
        $this->level = $level;
    }
}

function add_org($url, $small_org, $big_org, $logo, $level) {
    global $orgs;

    $orgs[] = new org($url, $small_org, $big_org, $logo, $level);
}

function org_cmp($a, $b) {
    return strcasecmp($a->small_org, $b->small_org);
}

function print_orgs() {
    global $orgs;
    usort($orgs, "org_cmp");

    while ($org = each($orgs)) {
        print_item($org[1]->url, $org[1]->small_org, $org[1]->big_org,
                   $org[1]->logo, $org[1]->level);
    }
}

function print_item($url, $small_org, $big_org, $logo, $level) {
    $href_start = "";
    $href_end = "";
    $img = "&nbsp;";
    $skip_space = 3;
    global $member, $contrib, $partner;
    global $num_members, $num_contribs, $num_partners;

    if (!empty($url)) {
        $href_start = "<a href=\"$url\">";
        $href_end = "</a>";
    }

    print "<tr>\n";

    # Organization
    $org = "$href_start$small_org$href_end";
    if (!empty($big_org)) {
        $org .= "<br>$big_org";
    }
    print("<td>$org</td>\n");
    print("<td width=$skip_space>&nbsp;</td>\n");

    # Status
    print("<td>");
    if ($level == $member) {
        print("Member");
        ++$num_members;
    } else if ($level == $contrib) {
        print("Contributor");
        ++$num_contribs;
    } else if ($level == $partner) {
        print("Partner");
        ++$num_partners;
    }
    print("</td>\n<td width=$skip_space>&nbsp;</td>\n");

    # Logo
    if (!empty($logo)) {
        $size = GetImageSize($logo);
        print("<td align=center>$href_start<img src=\"$logo\" $size[3] border=\"0\">$href_end</td>\n");
    } else {
        print("<td>&nbsp;</td>\n");
    }

    print("</tr>\n\n");
    print_line();
}

print_line();

add_org("http://www.absoft.com/", "Absoft Corporation",
           "Software Development Tools", "absoft.jpg", $partner);

add_org("http://www.arm.com/", "ARM", "", "ARM_Corp_RGB.gif", $contrib);

add_org("http://www.linaro.org/", "Linaro", "", "linaro.png", $contrib);

add_org("http://www.auburn.edu/", "Auburn University", "", 
        "auburn.jpg", $contrib);

add_org("http://www.lanl.gov/", "Los Alamos National Laboratory", "",
           "lanl.png", $member);

add_org("http://www.bull.com/", "Bull", "", "bull.png", $contrib);

add_org("http://www.chelsio.com/", "Chelsio Communications", "",
             "chelsio.jpg", $contrib);

add_org("http://www.coverity.com/", "Coverity Incorporated", "",
             "coverity.gif", $partner);

add_org("http://www.cisco.com/", "Cisco Systems, Inc.", "",
             "cisco.png", $member);

add_org("http://www.cs.uh.edu/", "Department of Computer Science",
             "University of Houston", "uh.jpg", $member);

// Removed by JMS 30 Oct 2013: this company no longer exists
//add_org("http://www.evergrid.com/", "Evergrid", "", 
//           "evergrid.jpg", $contrib);

add_org("http://www.hft-stuttgart.de", "HFT Stuttgart",
        "University of Applied Science",
        "hft-stuttgart.jpg", $contrib);

add_org("http://www.inria.fr/index.en.html", "Inria", 
           "The French National Institute for Research in Computer Science and Control", 
           "inria.jpg", $member);

add_org("http://www.minet.uni-jena.de/", 
           "Friedrich-Schiller-Universitat Jena", "", "jena.jpg", $contrib);

// Removed by JMS 30 Oct 2013: cannot find any reference to them on
// the internet
//add_org("", "Grid Technology Research Center",
//           "AIST", "aist.gif", $contrib);

add_org("http://www.hlrs.de/", "High Performance Computing Center
Stuttgart (HLRS)", "University of Stuttgart", "hlrs.png", $member);

add_org("http://www.ibm.com/", "IBM", "", "ibm.jpg", $member);

add_org("http://icl.cs.utk.edu/", "Innovative Computing
Laboratory", "Department of Computer Science, University of
Tennessee", "utk-icl.gif", $member);

add_org("http://www.llnl.gov", "Lawrence Livermore National Laboratory",
           "", "llnl.png", $contrib);

add_org("http://www.mellanox.com/", "Mellanox Technologies", "", 
             "mellanox.gif", $member);

add_org("http://www.myricom.com/", "Myricom, Inc.", "", 
             "myricom.gif", $contrib);

add_org("http://www.nvidia.com/", "Nvidia", "",
        "nvidia.jpg", $member);

add_org("http://www.ornl.gov/", "Oak Ridge National Laboratory",
             "National Center for Computational Sciences",
             "ornl.jpg", $member);

add_org("http://www.osl.iu.edu/", "Open Systems Laboratory",
             "Pervasive Technologies Lab at Indiana University", 
             "iu-ptl.gif", $member);

add_org("http://www.cs.ubc.ca/labs/dsg/mpi-sctp/", 
           "Distributed Systems Group",
           "Computer Science Department, University of British Columbia", 
           "ubc.jpg", $contrib);

add_org("http://www.oracle.com/", "Oracle", "", "oracle.png", $contrib);

// Removed by JMS 30 Oct 2013: this company no longer exists (they
// were bought by IBM)
//add_org("http://www.platform.com/", "Platform Computing",
//             "", "platform.gif", $contrib);

// Removed by JMS 30 Oct 2013: this company no longer exists (they
// were bought by Intel)
// add_org("http://www.qlogic.com/", "QLogic Corporation", "",
//         "qlogic.gif", $contrib);

add_org("http://www.rist.or.jp/rist/ehome.html", "RIST",
           "Research Organization for Information Science and Technology",
           "rist.png", $contrib);

add_org("http://www.sandia.gov/", "Sandia National Laboratories",
           "", "sandia.jpg", $member);

add_org("http://www.tu-chemnitz.de/informatik/RA/",
           "Computer Architecture Group", 
           "Technische Universtaet Chemnitz", "tuc.jpg", $contrib);

add_org("http://www.tu-dresden.de/zih", "Center for Information 
Services and High Performance Computing (ZIH)",
           "Technische Universitaet Dresden", "zih-logo-en.png", $member);

add_org("http://www.cs.uwlax.edu/", "Computer Science Department",
        "University of Wisconsin-La Crosse", "uwlax.jpg", $contrib);

add_org("http://www.wattsys.com/", 
        "Watt Systems Systems Technologies, Inc.", "",
        "wattsys.jpg", $contrib);

add_org("http://hpcc.kpi.ua/", "High Performance Computing Center", 
        "National Technical University of Ukraine \"KPI\"",
        "ntuu_kpi.png", $contrib);

add_org("http://www.hs-esslingen.de/", "Hochschule Esslingen",
        "University of Applied Sciences", "hs-esslingen.png", $contrib);

print_orgs();

?>

</table>
</center>
</p>

<?php 
print "<p>Totals:<br>

<ul>
<li><strong>Members:</strong> $num_members</li>
<li><strong>Partners:</strong> $num_partners</li>
<li><strong>Contributors:</strong> $num_contribs</li>
</ul>
</p>\n";

  include_once("$topdir/includes/footer.inc"); 
