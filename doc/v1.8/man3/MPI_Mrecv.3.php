<?php
$topdir = "../../..";
$title = "MPI_Mrecv(3) man page (version 1.8.4)";
$meta_desc = "Open MPI v1.8.4 man page: MPI_MRECV(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Mrecv</b> - Blocking receive for a matched message
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Mrecv(void *buf, int count, MPI_Datatype type,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Message *message, MPI_Status *status)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_MRECV(BUF, COUNT, DATATYPE, MESSAGE, STATUS, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;BUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;OUNT, DATATYPE, MESSAGE
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;STATUS(MPI_STATUS_SIZE), IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>There is no C++ binding for this function.
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Number of elements to receive (nonnegative integer).
</dd>

<dt>datatype </dt>
<dd>Datatype of each send buffer element (handle). </dd>

<dt>message </dt>
<dd>Message
(handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>buf </dt>
<dd>Initial address of receive buffer (choice).
</dd>

<dt>status </dt>
<dd>Status object (status). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).

<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
The functions MPI_Mrecv and <a href="../man3/MPI_Imrecv.3.php">MPI_Imrecv</a> receive messages that
have been previously matched by a matching probe. <p>
If MPI_Mrecv is called
with MPI_MESSAGE_NULL as the message argument, the call returns immediately
with the <i>status</i> object set to <i>source</i> = MPI_PROC_NULL, <i>tag</i> = MPI_ANY_TAG,
and <i>count</i> = 0, as if a receive from MPI_PROC_NULL was issued.
<p>
<h2><a name='sect8' href='#toc8'>Note</a></h2>
This
is an MPI-3 function and has no C++ binding.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines
return an error value; C routines as the value of the function and Fortran
routines in the last argument. C++ functions do not return errors.  <p>
Before
the error value is returned, the current MPI error handler is called. By
default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Mprobe.3.php">MPI_Mprobe</a>
<a href="../man3/MPI_Improbe.3.php">MPI_Improbe</a>
<a href="../man3/MPI_Probe.3.php">MPI_Probe</a>
<a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a>
<a href="../man3/MPI_Imrecv.3.php">MPI_Imrecv</a>
<a href="../man3/MPI_Cancel.3.php">MPI_Cancel</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
