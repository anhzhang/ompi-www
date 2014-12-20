<?php
$topdir = "../../..";
$title = "MPI_Win_lock_all(3) man page (version 1.8.4)";
$meta_desc = "Open MPI v1.8.4 man page: MPI_WIN_LOCK_ALL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Win_lock_all</b> - Starts an RMA access epoch locking access to

<p>all processes in the window
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Win_lock_all(int assert, MPI_Win win)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
<a href="../man3/MPI_Win_lock.3.php">MPI_WIN_LOCK</a>(ASSERT, WIN, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER ASSERT, WIN, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Input Parameters</a></h2>

<dl>

<dt>assert </dt>
<dd>Program assertion (integer). </dd>

<dt>win </dt>
<dd>Window object (handle).

<p> </dd>
</dl>

<h2><a name='sect5' href='#toc5'>Output Parameter</a></h2>

<dl>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
Starts
an RMA access epoch to all processes in <i>win</i>, with a lock type of MPI_LOCK_SHARED.
During the epoch, the calling process can access the window memory on all
processes in <i>win</i> by using RMA operations. A window locked with MPI_Win_lock_all
must be unlocked with <a href="../man3/MPI_Win_unlock_all.3.php">MPI_Win_unlock_all</a>. This routine is not collective
— the ALL refers to a lock on all members of the group of the window.
<p>
Locks are used to protect accesses to the locked target window effected
by RMA calls issued between the lock and unlock call, and to protect local
load/store accesses to a locked local window executed between the lock
and unlock call. Accesses that are protected by an exclusive lock will not
be concurrent at the window site with other accesses to the same window
that are lock protected. Accesses that are protected by a shared lock will
not be concurrent at the window site with accesses protected by an exclusive
lock to the same window. <p>
The <i>assert</i> argument is used to provide assertions
on the context of the call that may be used for various optimizations. (See
Section 6.4.4 of the MPI-2 Standard.) A value of <i>assert</i> = 0 is always valid.
<p>

<h2><a name='sect7' href='#toc7'>Notes</a></h2>
In a client/server environment in which clients connect to a server
and create windows that span both the client and the server, if a client
or server that has obtained a lock on such a window and then terminates
abnormally, the server or other clients may hang in a MPI_Win_lock_all
call, failing to notice that the peer MPI job has terminated.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
Almost
all MPI routines return an error value; C routines as the value of the
function and Fortran routines in the last argument. <p>
Before the error value
is returned, the current MPI error handler is called. By default, this error
handler aborts the MPI job, except for I/O function errors. The error handler
may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler
MPI_ERRORS_RETURN may be used to cause error values to be returned. Note
that MPI does not guarantee that an MPI program can continue past an error.

<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<a href="../man3/MPI_Win_unlock_all.3.php">MPI_Win_unlock_all</a> <a href="../man3/MPI_Win_lock.3.php">MPI_Win_lock</a> <br>
<p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>Input Parameters</a></li>
<li><a name='toc5' href='#sect5'>Output Parameter</a></li>
<li><a name='toc6' href='#sect6'>Description</a></li>
<li><a name='toc7' href='#sect7'>Notes</a></li>
<li><a name='toc8' href='#sect8'>Errors</a></li>
<li><a name='toc9' href='#sect9'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
