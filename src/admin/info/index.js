/* CSS */
import './index.scss';

/* global ThemeLabLocalize */
/* eslint-disable no-console */

/* WordPress */
import apiFetch from '@wordpress/api-fetch';

/* Local */
class ThemeLabPluginApi {
	constructor() {
		this.nonce = ThemeLabLocalize.nonce;
		this.bindEvents();
	}

	bindEvents() {
		document.addEventListener( 'click', ( event ) => {
			if (
				event.target.classList.contains(
					'prativa-theme-lab-install-plugin'
				)
			) {
				event.target.classList.add( 'prativa-theme-lab-processing' );
				this.installPlugin( event.target );
			}
		} );
	}

	async installPlugin( el ) {
		const pluginData = el.dataset.plugin;
		const plugin = JSON.parse( pluginData );
		try {
			const result = await apiFetch( {
				path: 'theme-lab/v1/install-plugin',
				method: 'POST',
				data: plugin,
				headers: {
					'X-WP-Nonce': this.nonce,
				},
			} );
			if ( result ) {
				if ( result.success ) {
					el.innerText = el.dataset.successText;
					el.disabled = true;
					el.classList.remove( 'prativa-theme-lab-install-plugin' );
				} else {
					el.innerText = el.dataset.failText;
				}
			}
		} catch ( error ) {
			console.error( error );
			el.innerText = el.dataset.failText;
		}
		el.classList.remove( 'prativa-theme-lab-processing' );
	}
}

document.addEventListener( 'DOMContentLoaded', () => {
	new ThemeLabPluginApi();
} );
