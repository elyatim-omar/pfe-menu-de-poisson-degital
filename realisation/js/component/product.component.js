class Product extends React.Component {
    constructor(props) {
        super(props)
    }

    render() {

        return (
                <tr>
              <td scope="row">{this.props.product.Firstname}</td>
              <td>{this.props.product.Lastname}</td>
            
              
              <td> <button type="button" className="btn  ml-4" onClick={this.props.onClickClose}>
              <img src="https://img.icons8.com/fluent/48/000000/filled-trash.png" width={25} height={25} />
            
          </button>
          </td>
         
                </tr>

        )
    }
}