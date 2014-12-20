<?php
$topdir = "../../..";
$title = "MPI_Type_get_envelope(3) man page (version 1.8.4)";
$meta_desc = "Open MPI v1.8.4 man page: MPI_TYPE_GET_ENVELOPE(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
     <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Type_get_envelope</b> - Returns information about input arguments
associated with a data type.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Type_get_envelope(MPI_Datatype datatype, int *num_integers,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int *num_addresses, int *num_datatypes, int *combiner)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_TYPE_GET_ENVELOPE(DATATYPE, NUM_INTEGERS, NUM_ADDRESSES,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;NUM_DATATYPES, COMBINER, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;DATATYPE, NUM_INTEGERS, NUM_ADDRESSES
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;NUM_DATATYPES, COMBINER, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
void MPI::Datatype::Get_envelope(int&amp; num_integers,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int&amp; num_addresses, int&amp; num_datatypes,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;int&amp; combiner) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameter</a></h2>

<dl>

<dt>datatype </dt>
<dd>Data type to access (handle).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>num_integers
</dt>
<dd>Number of input integers used in the call constructing <i>combiner</i> (nonnegative
integer). </dd>

<dt>num_addresses </dt>
<dd>Number of input addresses used in the call constructing
<i>combiner</i> (nonnegative integer). </dd>

<dt>num_datatypes </dt>
<dd>Number of input data types
used in the call constructing <i>combiner</i> (nonnegative integer). </dd>

<dt>combiner </dt>
<dd>Combiner
(state).  </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
For the
given data type, MPI_Type_get_envelope returns information on the number
and type of input arguments used in the call that created the data type.
The number-of-arguments values returned can be used to provide sufficiently
large arrays in the decoding routine <a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a>. This call and
the meaning of the returned values is described below. The combiner reflects
the MPI data type constructor call that was used in creating <i>datatype</i>.

<p>
<h2><a name='sect8' href='#toc8'>Notes</a></h2>
These are the values that can be returned in <i>combiner</i> and their associated
calls: <p>
<br>
<pre>Values                          Associated Calls
MPI_COMBINER_NAMED              a named predefined data type
MPI_COMBINER_DUP                <a href="../man3/MPI_Type_dup.3.php">MPI_Type_dup</a>
MPI_COMBINER_CONTIGUOUS         <a href="../man3/MPI_Type_contiguous.3.php">MPI_Type_contiguous</a>
MPI_COMBINER_VECTOR             <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>
MPI_COMBINER_HVECTOR_INTEGER    <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a> from Fortran
MPI_COMBINER_HVECTOR            <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a> from C or C++
                                  and MPI_Type_create for
                                  all languages
MPI_COMBINER_INDEXED            <a href="../man3/MPI_Type_indexed.3.php">MPI_Type_indexed</a>
MPI_COMBINER_HINDEXED_INTEGER   <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a> from Fortran
MPI_COMBINER_HINDEXED           <a href="../man3/MPI_Type_hindexed.3.php">MPI_Type_hindexed</a> from C or C++
                                  and <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>
                                  for all languages
MPI_COMBINER_INDEXED_BLOCK      <a href="../man3/MPI_Type_create_indexed_block.3.php">MPI_Type_create_indexed_block</a>
MPI_COMBINER_STRUCT_INTEGER     <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a> from Fortran
MPI_COMBINER_STRUCT             <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a> from C or C++
                                  and <a href="../man3/MPI_Type_create_struct.3.php">MPI_Type_create_struct</a>
                                  for all languages
MPI_COMBINER_SUBARRAY           <a href="../man3/MPI_Type_create_subarray.3.php">MPI_Type_create_subarray</a>
MPI_COMBINER_DARRAY             <a href="../man3/MPI_Type_create_darray.3.php">MPI_Type_create_darray</a>
MPI_COMBINER_F90_REAL           <a href="../man3/MPI_Type_create_f90_real.3.php">MPI_Type_create_f90_real</a>
MPI_COMBINER_F90_COMPLEX        <a href="../man3/MPI_Type_create_f90_complex.3.php">MPI_Type_create_f90_complex</a>
MPI_COMBINER_F90_INTEGER        <a href="../man3/MPI_Type_create_f90_integer.3.php">MPI_Type_create_f90_integer</a>
MPI_COMBINER_RESIZED            <a href="../man3/MPI_Type_create_resized.3.php">MPI_Type_create_resized</a>
</pre><p>
If <i>combiner</i> is MPI_COMBINER_NAMED, then <i>datatype</i> is a named predefined
data type. <p>
The actual arguments used in the creation call for a data type
can be obtained from the call <a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a>.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all
MPI routines return an error value; C routines as the value of the function
and Fortran routines in the last argument. C++ functions do not return errors.
If the default error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then
on error the C++ exception mechanism will be used to throw an MPI::Exception
object. <p>
Before the error value is returned, the current MPI error handler
is called. By default, this error handler aborts the MPI job, except for
I/O function errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>;
the predefined error handler MPI_ERRORS_RETURN may be used to cause error
values to be returned. Note that MPI does not guarantee that an MPI program
can continue past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<a href="../man3/MPI_Type_get_contents.3.php">MPI_Type_get_contents</a> <br>

<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameter</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Notes</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
