import { useBlockProps } from '@wordpress/block-editor';

import './style.scss';

export default function save( { attributes }) {
	return (
		<div { ...useBlockProps.save() }>
			<div class="sc-plax-bg-img-wrapper">
				<div
					className="sc-plax-bg-img"
					style={{
						
					}}
					data-image-src={attributes.imageUrl}
					data-parallax="scroll"
				></div>
			</div>
		</div>
	);
}
