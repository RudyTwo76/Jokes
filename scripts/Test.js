console.log("React Test");

'use strict';


const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }

  render() {
    if (this.state.liked) {
      return 'You liked this.';
    }

    // Display a "Like" <button>
return (
  <button onClick={() => this.setState({ liked: true })}>
    Like
  </button>
);
  }
}
const domContainer = document.querySelector('#Test_Container');
ReactDOM.render(e(LikeButton), domContainer);