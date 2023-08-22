import { useBlockProps, BlockControls, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Toolbar, ToolbarButton } from '@wordpress/components';

import './editor.scss';

export default function Edit(props) {

  const { attributes, setAttributes } = props;
  
  const onSelectImage = (media) => {
  	setAttributes({ imageUrl: media.url });
  }

  return (
    <div { ...useBlockProps() }>      
      <BlockControls>
      	<Toolbar>
      		<MediaUploadCheck>
      			<MediaUpload
      				onSelect={onSelectImage}
      				allowedTypes={['image']}
      				value={attributes.imageUrl}
      				render={ ({open}) => (
      					<ToolbarButton
      						icon="admin-appearance"
      						label="Select Image"
      						onClick={open}
      					/>
  					)}
  				/>
			</MediaUploadCheck>
		</Toolbar>
	  </BlockControls>
	  <div
	  	className="sc-plax-bg-img"
	  	style={{	  	  
	  	  backgroundImage: `url(${attributes.imageUrl})`,
	  	  backgroundPosition: 'center'
	  	 }}
	  	 data-image-src={attributes.imageUrl}
		 data-parallax="scroll"
	  ></div>	  
    </div>
  );
}

