<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pronamic Pay Logos</title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	</head>

	<body>
		<div class="px-4 py-5 my-5 text-center">
			<img class="d-block mx-auto mb-4 rounded" src="images/pronamic-icon.svg" alt="" width="64" height="64">

			<h1 class="display-5 fw-bold">Pronamic Pay Logos</h1>

			<div class="col-lg-6 mx-auto">
				<p class="lead mb-4">Logos for the Pronamic Pay WordPress plugin.</p>
			</div>
		</div>

		<div class="container">
			<h2>Plugins</h2>

			<?php

			$plugins = [
				'charitable',
				'contact-form-7',
				'easydigitaldownloads',
				'event-espresso',
				'formidable-forms',
				'give',
				'gravity-forms',
				'memberpress',
				'ninja-forms',
				'restrictcontentpro',
				'woocommerce',
			];

			?>

			<h3>Logos</h3>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">Regular</th>
					</tr>
				</thead>

				<tbody>

					<?php foreach ( $plugins as $plugin ) : ?>

						<tr>
							<?php

							$image_regular  = sprintf( 'logos/plugins/%s/plugin-%s-640x360.svg', $plugin, $plugin );

							?>
							<td style="background: #FFF;" class="p-4">
								<?php

								if ( is_readable( __DIR__ . '/build/' . $image_regular ) ) {
									printf(
										'<img src="%s" class="img-fluid">',
										$image_regular
									);
								}

								?>
							</td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table>

			<h3>Icons</h3>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">Regular</th>
						<th scope="col">White</th>
						<th scope="col">Inverted</th>
					</tr>
				</thead>

				<tbody>

					<?php foreach ( $plugins as $plugin ) : ?>

						<tr>
							<?php

							$image_regular  = sprintf( 'logos/plugins/%s/plugin-%s-icon-512x512.svg', $plugin, $plugin );
							$image_white    = sprintf( 'logos/plugins/%s/plugin-%s-icon-white-512x512.svg', $plugin, $plugin );
							$image_inverted = sprintf( 'logos/plugins/%s/plugin-%s-icon-inverted-512x512.svg', $plugin, $plugin );

							?>
							<td style="background: #FFF;" class="p-4">
								<?php

								if ( is_readable( __DIR__ . '/build/' . $image_regular ) ) {
									printf(
										'<img src="%s" class="img-fluid">',
										$image_regular
									);
								}

								?>
							</td>
  							<td style="background: #000;" class="p-4">
								<?php

								if ( is_readable( __DIR__ . '/build/' . $image_white ) ) {
									printf(
										'<img src="%s" class="img-fluid">',
										$image_white
									);
								}

								?>
							</td>
							<td style="background: #F9461C;" class="p-4">
								<?php

								if ( is_readable( __DIR__ . '/build/' . $image_inverted ) ) {
									printf(
										'<img src="%s" class="img-fluid">',
										$image_inverted
									);
								}

								?>
							</td>
						</tr>

					<?php endforeach; ?>

				</tbody>
			</table>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	</body>
</html>
