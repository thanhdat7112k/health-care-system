import { useEffect, useRef, useState } from 'react';
import Container from 'react-bootstrap/Container';
import moment from 'moment';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import './style.css';
import { useNavigate, useParams } from 'react-router-dom';
import axios from 'axios';

function History() {
    const [histories, setHistories] = useState([])
    const navigate = useNavigate()
    const user = JSON.parse(localStorage.getItem('user'))

    useEffect(() => {
        getHistory();
    }, []);

    function getHistory() {
        const requestOption = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message: user.username }),
        }
        fetch('http://127.0.0.1:8081/api/history', requestOption)
            .then(response => response.json())
            .then(histories => setHistories(histories))
    }
    const handleDelete = async (historyItem) => {
        const response = await axios({
            method: 'DELETE',
            url: 'http://127.0.0.1:8081/api/deletehistory',
            headers: { 'Content-Type': 'application/json' },
            data: {
                message: historyItem.username,
                context: historyItem.id
            }
        });

        getHistory();

    }

    const logoutRequest = () => {
        localStorage.removeItem("user")
        navigate("/", { replace: true })
    }
    const historyRequest = () => {
        navigate("/history", { replace: true })
    }
    const homeRequest = () => {
        navigate("/search", { replace: true })
    }
    return (
        <div className="container">
            <div className='row-2'></div>
            <div>
                <Navbar bg="light" expand="lg" style={{ zIndex: "10" }}>
                    <Container fluid>
                        <Navbar.Brand onClick={homeRequest}>Health care system</Navbar.Brand>
                        <Navbar.Toggle aria-controls="navbarScroll" />
                        <Navbar.Collapse id="navbarScroll">
                            <Nav
                                className="me-auto my-2 my-lg-0"
                                style={{ maxHeight: '100px' }}
                                navbarScroll
                            >
                            </Nav>
                            <Form className="d-flex">
                                <NavDropdown title={user.firstname + " " + user.lastname} id="navbarScrollingDropdown">
                                    <NavDropdown.Item onClick={historyRequest}>Medical History</NavDropdown.Item>

                                    <NavDropdown.Divider />
                                    <NavDropdown.Item onClick={logoutRequest}>Log Out</NavDropdown.Item>
                                </NavDropdown>
                            </Form>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
            </div>
            <div className="row height d-flex justify-content-center align-items-center">
                <div className="row">
                    <h1 className='tableTitle'> Medical Histories</h1>
                    <div className="col-md-8 mx-auto">
                        <table className="table bg-white rounded border">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Ngay Thang</th>
                                    <th scope="col">Hien Tuong</th>
                                    <th scope="col">Van De</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {histories.map((item, i) => {
                                    return (
                                        <tr>
                                            <td>{i + 1}</td>
                                            <td>{moment(item.dateTime).format("DD/MM/yyyy")}</td>
                                            <td>{item.symptoms}</td>
                                            <td>{item.diseaseName}</td>
                                            <td>
                                                <button type="button" className="btn btn-secondary" onClick={() => handleDelete(item)}>Xoá</button>
                                            </td>
                                        </tr>
                                    );
                                })}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    );
}
export default History;