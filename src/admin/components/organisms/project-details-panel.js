import { registerPlugin } from '@wordpress/plugins';
import { PluginDocumentSettingPanel } from '@wordpress/editor';
import { TextControl } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';

const ProjectDetailsPanel = () => {

	const meta = useSelect( ( select ) =>
		select( 'core/editor' ).getEditedPostAttribute( 'meta' )
	, [] );

	const { editPost } = useDispatch( 'core/editor' );

	const updateMeta = ( key, value ) => {
		editPost( { meta: { ...meta, [ key ]: value } } );
	};

	return (
		<PluginDocumentSettingPanel
			name="project-details"
			title="Project Details"
		>
			<TextControl
				label="GitHub URL"
				value={ meta?.github_url || '' }
				onChange={ ( value ) => updateMeta( 'github_url', value ) }
			/>
			<TextControl
				label="Live URL"
				value={ meta?.live_url || '' }
				onChange={ ( value ) => updateMeta( 'live_url', value ) }
			/>
			<TextControl
				label="Tech Stack"
				value={ meta?.tech_stack || '' }
				onChange={ ( value ) => updateMeta( 'tech_stack', value ) }
			/>
		</PluginDocumentSettingPanel>
	);
};

registerPlugin( 'portfolio-manager-project-details', {
	render: ProjectDetailsPanel,
} );