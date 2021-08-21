import React from "react";

class Inventory extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: [],
            total: Number
        };
    }

    componentDidMount() {
        fetch("http://localhost:8000/api/inventory")
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result)
                    this.setState({
                        isLoaded: true,
                        items: result.inventory,
                        total: result.total
                    });
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                }
            )
    }

    render() {
        const { error, isLoaded, items } = this.state;
        if (error) {
            return <div>Error: {error.message}</div>;
        } else if (!isLoaded) {
            return <div>Loading...</div>;
        } else {
            return (
                <>
                    <div class="row mt-3">
                        <div class="form-group col-3">
                            <label>From Date</label>
                        </div>
                        <div class="form-group col-3">
                            <label>To Date</label>
                        </div>

                    </div >
                    <div class="row">
                        <div class="form-group col-3">
                            <input type="date" name="from" class="form-control" placeholder="From date" id="from" />
                        </div>
                        <div class="form-group col-3">
                            <input type="date" name="to" class="form-control" placeholder="To date" id="to" />
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success mr-2 float-end" value="Submit"></input>
                        </div>
                    </div >

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Cetegory</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            {items.map(item => (
                                <tr key={item.id}>
                                    <td>{item.name}</td>
                                    <td>{item.description}</td>
                                    <td>{item.category}</td>
                                    <td>{item.quantity}</td>
                                    <td>{item.price}</td>
                                    <td>{item.price * item.quantity}</td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </>
            );
        }
    }
}

export default Inventory;