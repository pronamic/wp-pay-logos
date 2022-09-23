<p align="center">
	<a href="https://www.wp-pay.org/">
		<img src="https://www.wp-pay.org/assets/pronamic-pay.svgo-min.svg" alt="WordPress Pay » Core" width="72" height="72">
	</a>
</p>

<h1 align="center">WordPress Pay » Logos</h3>

<p align="center">
	Logos for the WordPress payment processing library.
</p>

## Table of contents

- [CDN](#cdn)
	- [jsDelivr](#jsdelivr)
	- [UNPKG](#unpkg)
- [SVGO](#svgo)
- [Sizes](#sizes)
- [Center](#center)
- [Requirements](#requirements)

## CDN

### jsDelivr

https://www.jsdelivr.com/package/npm/@wp-pay/logos

### UNPKG

https://unpkg.com/browse/@wp-pay/logos

## SVGO

```
svgo -r -f ./src -o ./dist
```

## Sizes

### `640` `×` `360` & `10pct` margin

```
┌──────────────────────────────┐
|         ↕ 10% = 36 ↕         |
|     ┌──────────────────┐     |
|  ↔  |      ← 512 →     |  ↔  |
| 10% | ↑              ↑ | 10% |
|  =  | 288          288 |  =  |
| 64  | ↓              ↑ | 64  |
|  ↔  |      ← 512 →     |  ↔  |
|     └──────────────────┘     |
|         ↕ 10% = 36 ↕         |
└──────────────────────────────┘
```

The `max-width` of the actual logo is `512` and the `max-height` is `288`.

## Center

> The "visual center" is where all of the elements weights are balanced visually despite not being in the exact center.

- https://graphicdesign.stackexchange.com/questions/74356/correctly-vertically-center-text-in-a-box
- https://javier.xyz/visual-center/

## Requirements

### pngquant

```
brew install pngquant
```

- https://formulae.brew.sh/formula/pngquant
- https://pngquant.org/

### Inkscape

```
brew install --cask inkscape
```

- https://formulae.brew.sh/cask/inkscape
- https://inkscape.org/

## Toolbox

### Examples

```
bin/toolbox all
```

```
bin/toolbox all --path=methods/maestro
bin/toolbox all --path=methods/mastercard
```

## Other libraries

After Pronamic launched this pay logos libraries a number of other (Dutch) payment providers have followed our example:

| Date | Repository |
| ---- | ---------- |
| 2020-02-25 | https://github.com/pronamic/wp-pay-logos |
| 2020-03-30 | https://github.com/MultiSafepay/MultiSafepay-icons |
| 2020-06-19 | https://github.com/paynl/payment-images |

## Resources

- https://brand.mastercard.com/brandcenter/other-marks.html
- https://brand.mastercard.com/brandcenter/mastercard-brand-mark/downloads.html
- https://en.wikipedia.org/wiki/Box-drawing_character
- https://en.wikipedia.org/wiki/Arrow_(symbol)
