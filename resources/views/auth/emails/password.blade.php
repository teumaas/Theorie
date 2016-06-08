<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
	/* -------------------------------------
	GLOBAL
	------------------------------------- */
	
	* {
		font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
		font-size: 100%;
		line-height: 1.6em;
		margin: 0;
		padding: 0;
	}

	img {
		max-width: 600px;
		width: auto;
	}

	body {
		-webkit-font-smoothing: antialiased;
		height: 100%;
		-webkit-text-size-adjust: none;
		width: 100% !important;
	}

	/* -------------------------------------
	ELEMENTS
	------------------------------------- */
	
	a {
		color: #348eda;
	}

	.btn-primary {
		Margin-bottom: 10px;
		width: auto !important;
	}

	.btn-primary td {
		background-color: #348eda;
		border-radius: 25px;
		font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-size: 14px;
		text-align: center;
		vertical-align: top;
	}

	.btn-primary td a {
		background-color: #348eda;
		border: solid 1px #348eda;
		border-radius: 25px;
		border-width: 10px 20px;
		display: inline-block;
		color: #ffffff;
		cursor: pointer;
		font-weight: bold;
		line-height: 2;
		text-decoration: none;
	}

	.last {
		margin-bottom: 0;
	}

	.first {
		margin-top: 0;
	}

	.padding {
		padding: 10px 0;
	}

	/* -------------------------------------
	BODY
	------------------------------------- */
	
	table {
		border-collapse: collapse;
	}

	table.body-wrap {
		padding: 20px;
		width: 100%;
		border-collapse: separate;
	}

	table.body-wrap .container {
		border: 1px solid #f0f0f0;
	}

	.row-title-wrapper {
		width: 180px;
		padding-right: 20px;
		vertical-align: top;
	}

	.row-content-wrapper {

	}

	/* -------------------------------------
	FOOTER
	------------------------------------- */
	
	table.footer-wrap {
		clear: both !important;
		width: 100%;
	}

	.footer-wrap .container p {
		color: #666666;
		font-size: 12px;

	}

	table.footer-wrap a {
		color: #999999;
	}

	/* -------------------------------------
	TYPOGRAPHY
	------------------------------------- */
	
	h1,
	h2,
	h3 {
		color: #111111;
		font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
		font-weight: 200;
		line-height: 1.2em;
		margin: 40px 0 10px;
	}

	h1 {
		font-size: 36px;
	}
	h2 {
		font-size: 28px;
	}
	h3 {
		font-size: 22px;
	}

	p,
	ul,
	ol {
		font-size: 14px;
		font-weight: normal;
		margin-bottom: 10px;
	}

	ul li,
	ol li {
		margin-left: 5px;
		list-style-position: inside;
	}

	h1.mail-title {
		margin: 0;
		font-weight: bold;
	}

	p.row-title {
		font-weight: bold;
		text-align: right;
		margin: 0;
	}

	p.row-content {
		margin: 0;
	}

	/* ---------------------------------------------------
	RESPONSIVENESS
	------------------------------------------------------ */

	/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
	.container {
		clear: both !important;
		display: block !important;
		margin: 0 auto !important;
		max-width: 600px !important;
		width: 600px;
	}

	/* Set the padding on the td rather than the div for Outlook compatibility */
	.body-wrap .container {
		padding: 20px;
	}

	/* This should also be a block element, so that it will fill 100% of the .container */
	.content {
		display: block;
		margin: 0 auto;
		max-width: 600px;
	}

	/* Let's make sure tables in the content area are 100% wide */
	.content table {
		width: 100%;
	}

	/* ---------------------------------------------------
	COLORS
	------------------------------------------------------ */

	p.row-title {
		color: #48cfad;
	}

	.border-bottom > td {
		border-bottom: 1px solid #48cfad;
	}

	.border-top > td {
		border-top: 1px solid #48cfad;
	}
	</style>
</head>

<body bgcolor="#f1f2f6">

	<!-- body -->
	<table class="body-wrap" bgcolor="#f1f2f6">
		<tr>
			<td></td>
			<td class="container" bgcolor="#ffffff">

				<div class="content">
					<table>
						<tr>
							<td align="center">								
								<img src="{{ app.request.getSchemeAndHttpHost() ~ asset('images/icons/car-gray.svg') }}"/>
							</td>
						</tr>
						<tr class="border-bottom">
							<td colspan="2" height="10"></td>
						</tr>
					</table>
				</div>

				<div class="content">
					<table>
						<tr>
							<td height="20"></td>
						</tr>
					</table>
				</div>
				
				<div class="content">
					<table>
						<tr>
							<td class="row-content-wrapper">
								<p class="row-content">Klik hier om uw wachtwoord te herstellen <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a></p>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td></td>
		</tr>
	</table>
	<!-- /body -->
</body>
</html>