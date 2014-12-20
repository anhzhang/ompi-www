<?php
$topdir = "../../..";
$title = "OpenMPI(3) man page (version 1.8.4)";
$meta_desc = "Open MPI v1.8.4 man page: OpenMPI(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
    <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
MPI - General information Open MPI 1.8.4.
<p>
<h2><a name='sect1' href='#toc1'>Mpi</a></h2>
Open MPI is an open
source implementation of MPI (message-passing interface), the industry-standard
specification for writing message-passing programs. Message passing is a
programming model that gives the programmer explicit control over interprocess
communication. <p>
The MPI specification was developed by the MPI Forum, a group
of software developers, computer vendors, academics, and computer-science
researchers whose goal was to develop a standard for writing message-passing
programs that would be efficient, flexible, and portable. <p>
The outcome, known
as the MPI Standard, was first published in 1993; its most recent version
(MPI-2) was published in July 1997. Open MPI 1.2 includes all MPI 1.2-compliant
and MPI 2-compliant routines. <p>
For more information about Open MPI, see the
following URL: <br>
<pre>   http://www.open-mpi.org
</pre><p>
The MPI standards are available at the following URL: <br>
<pre>    http://www.mpi-forum.org
</pre>
<p>
<h2><a name='sect2' href='#toc2'>Man Page Syntax</a></h2>
Man pages for Open MPI and Open MPI I/O routines are named
according to C syntax, that is, they begin with the prefix "MPI_", all
in uppercase, and the first letter following the "MPI_" prefix is also
uppercase. The rest of the letters in the routine are all lowercase, for
example, "<a href="../man3/MPI_Comm_get_attr.3.php">MPI_Comm_get_attr</a>".
<p>
<h2><a name='sect3' href='#toc3'>Environment</a></h2>
To fine-tune your Open MPI environment,
you can either use arguments to the <i>mpirun</i>, <i>orterun</i>, or <i>mpiexec</i> commands,
or you can use MCA parameters.  <p>
For more information on arguments, see the
orterun.1 man page. <p>
For a complete listing of MCA parameters and their descriptions,
issue the command <i>ompi_info -h</i> or <i>ompi_info -param all all</i>. This information
also appears in the FAQ on the Open MPI web site at: <br>
<pre>   http://www.open-mpi.org/faq/?category=tuning#mca-params
</pre>
<p>
<h2><a name='sect4' href='#toc4'>Errors</a></h2>
All MPI routines (except <a href="../man3/MPI_Wtime.3.php">MPI_Wtime</a> and <a href="../man3/MPI_Wtick.3.php">MPI_Wtick</a>) return an error
value; C routines as the value of the function and Fortran routines in
the last argument.  Before the value is returned, the current MPI error
handler is called.  By default, this error handler aborts the MPI job.  The
error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined
error handler MPI_ERRORS_RETURN may be used to cause error values to be
returned. Note that MPI does not guarantee that an MPI program can continue
past an error.  <p>
For more information on Open MPI error codes, see <i>mpi.h</i> in
the <i>include</i> directory. <p>
Standard error return classes for Open MPI: <p>
<br>
<pre>MPI_SUCCESS              0      Successful return code.
MPI_ERR_BUFFER           1      Invalid buffer pointer.
MPI_ERR_COUNT            2      Invalid count argument.
MPI_ERR_TYPE             3      Invalid datatype argument.
MPI_ERR_TAG              4      Invalid tag argument.
MPI_ERR_COMM             5      Invalid communicator.
MPI_ERR_RANK             6      Invalid rank.
MPI_ERR_REQUEST          7      Invalid MPI_Request handle.
MPI_ERR_ROOT             7      Invalid root.
MPI_ERR_GROUP            8      Null group passed to function.
MPI_ERR_OP               9      Invalid operation.
MPI_ERR_TOPOLOGY        10      Invalid topology.
MPI_ERR_DIMS            11      Illegal dimension argument.
MPI_ERR_ARG             12      Invalid argument.
MPI_ERR_UNKNOWN         13      Unknown error.
MPI_ERR_TRUNCATE        14      Message truncated on receive.
MPI_ERR_OTHER           15      Other error; use Error_string.
MPI_ERR_INTERN          16      Internal error code.
MPI_ERR_IN_STATUS       17      Look in status for error value.
MPI_ERR_PENDING         18      Pending request.
MPI_ERR_ACCESS          19      Permission denied.
MPI_ERR_AMODE           20      Unsupported amode passed to open.

MPI_ERR_ASSERT          21      Invalid assert.
MPI_ERR_BAD_FILE        22      Invalid file name (for example,
                                path name too long).
MPI_ERR_BASE            23      Invalid base.
MPI_ERR_CONVERSION      24      An error occurred in a user-supplied
                                data-conversion function.
MPI_ERR_DISP            25      Invalid displacement.
MPI_ERR_DUP_DATAREP     26      Conversion functions could not
                                be registered because a data
                                representation identifier that was
                                already defined was passed to
                                <a href="../man3/MPI_Register_datarep.3.php">MPI_REGISTER_DATAREP</a>.
MPI_ERR_FILE_EXISTS     27      File exists.
MPI_ERR_FILE_IN_USE     28      File operation could not be
                                completed, as the file is currently
                                open by some process.
MPI_ERR_FILE            29
MPI_ERR_INFO_KEY        30      Illegal info key.
MPI_ERR_INFO_NOKEY      31      No such key.
MPI_ERR_INFO_VALUE      32      Illegal info value.
MPI_ERR_INFO            33      Invalid info object.
MPI_ERR_IO              34      I/O error.
MPI_ERR_KEYVAL          35      Illegal key value.
MPI_ERR_LOCKTYPE        36      Invalid locktype.
MPI_ERR_NAME            37      Name not found.
MPI_ERR_NO_MEM          38      Memory exhausted.
MPI_ERR_NOT_SAME        39
MPI_ERR_NO_SPACE        40      Not enough space.
MPI_ERR_NO_SUCH_FILE    41      File (or directory) does not exist.
MPI_ERR_PORT            42      Invalid port.
MPI_ERR_QUOTA           43      Quota exceeded.
MPI_ERR_READ_ONLY       44      Read-only file system.
MPI_ERR_RMA_CONFLICT    45      Conflicting accesses to window.

MPI_ERR_RMA_SYNC        46      Erroneous RMA synchronization.
MPI_ERR_SERVICE         47      Invalid publish/unpublish.
MPI_ERR_SIZE            48      Invalid size.
MPI_ERR_SPAWN           49      Error spawning.
MPI_ERR_UNSUPPORTED_DATAREP
                        50      Unsupported datarep passed to
                                <a href="../man3/MPI_File_set_view.3.php">MPI_File_set_view</a>.
MPI_ERR_UNSUPPORTED_OPERATION
                        51      Unsupported operation, such as
                                seeking on a file that supports
                                only sequential access.
MPI_ERR_WIN             52      Invalid window.
MPI_ERR_LASTCODE        53      Last error code.
MPI_ERR_SYSRESOURCE     -2      Out of resources
</pre>
<p>
<p>
<p>
<p>
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Mpi</a></li>
<li><a name='toc2' href='#sect2'>Man Page Syntax</a></li>
<li><a name='toc3' href='#sect3'>Environment</a></li>
<li><a name='toc4' href='#sect4'>Errors</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
