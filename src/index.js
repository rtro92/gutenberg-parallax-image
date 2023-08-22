
import { registerBlockType } from '@wordpress/blocks';

import './style.scss';


import Edit from './edit';
import save from './save';
import metadata from './block.json';

const defaultImgUrl = localizedVars.defaultImgUrl;

registerBlockType( metadata.name, {
	title: metadata.title,
	icon: metadata.icon,
	category: metadata.category,
	attributes: {
		imageUrl: {
			type: 'string',
			default: defaultImgUrl
		}
	},
	edit: Edit,

	save,
} );
