<?

function store_rdf($nickname, $rdf)
{
	// directory must be writeable

	file_put_contents($nickname, $rdf);
}

?>
