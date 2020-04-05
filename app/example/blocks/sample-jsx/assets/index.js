const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { RichText } = wp.editor;

registerBlockType("plugdation/sample-jsx", {
    title: __("Plugdation Example JSX Block", "plugdation"),
    icon: "wordpress",
    category: "widgets",
    attributes: {
        message: {
            type: "string",
            source: "html",
            selector: ".message"
        }
    },

    edit: props => {
        const {className, setAttributes} = props;
        const {message} = props.attributes;

        const onChangeMessage = newMessage => {
            setAttributes({ message: newMessage});
        };

        return (
            <div className={className}>
                <RichText
                    tagName={'p'}
                    className={'message'}
                    placeholder={__("Enter a message", "plugdation")}
                    value={message}
                    onChange={onChangeMessage}
                />
            </div>
        );
    },
    save: props => {
        return (
            <div>
                <RichText.Content
                    tagName={'p'}
                    className={'message'}
                    value={props.attributes.message}
                />
            </div>
        );
    }
});
