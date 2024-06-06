# iDEAL issuers

## Mollie

```sh
https -A bearer -a $MOLLIE_API_KEY "https://api.mollie.com/v2/methods/all?include=issuers"
```

Most Mollie issuer SVG images are in `32` `×` `24` format, but the following two are in `30` `×` `30` format:

| Code       | Name                  | Link 1                                                           | Link 2                                                                           |
| ---------- | --------------------- | ---------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `NTSBDEB1` | N26                   | https://www.mollie.com/external/icons/ideal-issuers/NTSBDEB1.svg | https://www.mollie.com/external/icons/payment-methods/ideal/issuers/NTSBDEB1.svg |
| `NNBANL2G` | Nationale-Nederlanden | https://www.mollie.com/external/icons/ideal-issuers/NNBANL2G.svg | https://www.mollie.com/external/icons/payment-methods/ideal/issuers/NNBANL2G.svg |

We have reported this to Mollie in the following issue:

- https://github.com/mollie/api-documentation/issues/964

The images in the `32` `×` `24` format of these iDEAL issuers are therefore made by Pronamic.

## iDEAL Hub

The iDEAL Hub is also equipped with iDEAL issuer SVGs, a reference is listed in a minified JavaScript file:
https://pay.ideal.nl/static/js/main.a4ea3982.js

Most iDEAL Hub issuer SVG images are in `40` `×` `40` but there are also some in different sizes and proportions. The images in the `40` `×` `40` format of these iDEAL issuers are therefore made by Pronamic.

## Links

- https://github.com/pronamic/ideal-issuers
