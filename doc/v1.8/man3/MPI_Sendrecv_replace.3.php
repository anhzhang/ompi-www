<?php
$topdir = "../../..";
$title = "MPI_Sendrecv_replace(3) man page (version 1.8.4)";
$meta_desc = "Open MPI v1.8.4 man page: MPI_SENDRECV_REPLACE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Sendrecv_replace</b> - Sends and receives a message using a single
buffer.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Sendrecv_replace(void *buf, int count, MPI_Datatype datatype,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int dest, int sendtag, int source, int recvtag, MPI_Comm comm,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Status *status)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_SENDRECV_REPLACE(BUF, COUNT, DATATYPE, DEST, SENDTAG, SOURCE,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;RECVTAG, COMM, STATUS, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;&lt;type&gt;<tt> </tt>&nbsp;<tt> </tt>&nbsp;BUF(*)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;COUNT, DATATYPE, DEST, SENDTAG
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;SOURCE, RECVTAG, COMM
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;STATUS(MPI_STATUS_SIZE), IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void Comm::Sendrecv_replace(void* buf, int count, const
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Datatype&amp; datatype, int dest, int sendtag, int source,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int recvtag, Status&amp; status) const
void Comm::Sendrecv_replace(void* buf, int count, const
<tt> </tt>&nbsp;<tt> </tt>&nbsp;Datatype&amp; datatype, int dest, int sendtag, int source,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int recvtag) const
</pre>
<h2><a name='sect5' href='#toc5'>Input/Output Parameter</a></h2>

<dl>

<dt>buf </dt>
<dd>Initial address of send and receive buffer (choice).

<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Input Parameters</a></h2>

<dl>

<dt>count </dt>
<dd>Number of elements in send and receive buffer (integer).
</dd>

<dt>datatype </dt>
<dd>Type of elements to send and receive (handle). </dd>

<dt>dest </dt>
<dd>Rank of destination
(integer). </dd>

<dt>sendtag </dt>
<dd>Send message tag (integer). </dd>

<dt>source </dt>
<dd>Rank of source (integer).
</dd>

<dt>recvtag </dt>
<dd>Receive message tag (integer). </dd>

<dt>comm </dt>
<dd>Communicator (handle).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Output
Parameters</a></h2>

<dl>

<dt>status </dt>
<dd>Status object (status). </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status
(integer).
<p> </dd>
</dl>

<h2><a name='sect8' href='#toc8'>Description</a></h2>
The send-receive operations combine in one call the
sending of a message to one destination and the receiving of another message,
from another process. The two (source and destination) are possibly the
same. A send-receive operation is useful for executing a shift operation
across a chain of processes. If blocking sends and receives are used for
such a shift, then one needs to order the sends and receives correctly
(for example, even processes send, then receive; odd processes receive
first, then send) in order to prevent cyclic dependencies that may lead
to deadlock. When a send-receive operation is used, the communication subsystem
takes care of these issues. The send-receive operation can be used in conjunction
with the functions described in Chapter 6 of the MPI Standard, "Process
Topologies," in order to perform shifts on various logical topologies. Also,
a send-receive operation is useful for implementing remote procedure calls.
<p>
A message sent by a send-receive operation can be received by a regular
receive operation or probed by a probe operation; a send-receive operation
can receive a message sent by a regular send operation.  <p>
MPI_Sendrecv_replace
executes a blocking send and receive. The same buffer is used both for the
send and for the receive, so that the message sent is replaced by the message
received. <p>
The semantics of a send-receive operation is what would be obtained
if the caller forked two concurrent threads, one to execute the send, and
one to execute the receive, followed by a join of these two threads.
<p>

<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error value; C routines as the
value of the function and Fortran routines in the last argument. C++ functions
do not return errors. If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS,
then on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Sendrecv.3.php">MPI_Sendrecv</a>
<p>
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input/Output Parameter</a></li>
<li><a name='toc6' href='#sect6'>Input Parameters</a></li>
<li><a name='toc7' href='#sect7'>Output Parameters</a></li>
<li><a name='toc8' href='#sect8'>Description</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
