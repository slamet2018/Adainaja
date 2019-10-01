const { Sticky } = semanticUIReact;

const testSticky = () => {
  const prefix = ['', '-o-', '-webkit-', '-moz-', '-ms-']
  const test = document.head.style
  for (let i = 0; i < prefix.length; i += 1) {
    test.position = `${prefix[i]}sticky`
  }
  
  return test.position === 'sticky';
};

class MySticky extends Sticky {
  constructor(props) {
    super(props);
    
    const oldAddListeners = this.addListeners;
    const oldRemoveListeners = this.removeListeners;
    let myObserver;
    
    this.addListeners = args => {
      oldAddListeners(args);
      
      myObserver = new ResizeObserver(entries => {
        entries.forEach(entry => {
          const { scrollContext } = props;

          if (scrollContext) {
            this.handleUpdate({ target: scrollContext });
          }
        });
      });

      myObserver.observe(this.props.context);
    };
    
    this.removeListeners = args => {
      oldRemoveListeners(args);
      
      myObserver.unobserve(this.props.context);
    };
  }
  
  update = (e) => {
    this.ticking = false;
    this.assignRects();

    return this.didTouchScreenBottom() ? this.stickToScreenBottom(e) : this.stickToContextBottom(e);
  }
}

class StickyFooter extends React.Component {
  state = {
    supportsSticky: true,
  };

  componentDidMount() {
    const supportsSticky = testSticky();
    
    this.setState({
      supportsSticky,
    });
  }

  renderFooter = () => {
    const { supportsSticky } = this.state;
    
    return (
      <footer className={ supportsSticky ? 'sticky' : null }>
        <h1>sticky footer</h1>
      </footer>
    );
  };

  render() {    
    const { supportsSticky } = this.state;
    
    return (
       supportsSticky ? this.renderFooter() :
       (
         <MySticky 
           context={this.props.context}
          >
           {this.renderFooter()}
         </MySticky>
       )
    );
  }  
}

class StickyParent extends React.Component {
  state = {};

  handleContextRef = contextRef => {
    this.setState({ contextRef });
  };

  shortenContext = () => {
    const { contextRef } = this.state;
    
    if (contextRef.offsetHeight <= 200) return;
    
    contextRef.style.height = `${contextRef.offsetHeight - 200}px`;
  };

  resetContextHeight = () => {
    const { contextRef } = this.state;
    
    contextRef.style.height = '1000px';
  };

  render() {
    const { contextRef } = this.state;
    
    return (
      <div className="container">
        <div className="context" ref={this.handleContextRef}>
          <h1>context</h1>
          <button onClick={this.shortenContext}>Shorten</button>
          <button onClick={this.resetContextHeight}>Reset</button>
        </div>
        <StickyFooter context={contextRef} />
        <footer>
          <h1>footer</h1>
        </footer>
      </div>
    );
  }
}

ReactDOM.render(<StickyParent />, document.getElementById('root'));