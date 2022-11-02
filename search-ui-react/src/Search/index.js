import Container from 'react-bootstrap/Container';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import axios from 'axios';
import './style.css';
import { useRef, useState } from 'react';
import { useNavigate } from 'react-router-dom';
import logo from '../image/logo1.jpg'
import tutorial from '../image/tutorial2.png'

function Search() {
    const messageRef = useRef()
    const [responseMess, setResponseMess] = useState()
    const navigate = useNavigate()
    const sendMessage = async () => {
        if (messageRef.current.value) {
            const response = await axios({
                method: 'post',
                url: 'http://127.0.0.1:8081/api/sendMessage',
                headers: { 'Content-Type': 'application/json' },
                data: {
                    message: messageRef.current.value,
                    context: user.username
                }
            });
            setResponseMess(response.data)
        }
    }
    const feedbackRef = useRef()
    const [seleted, setSelected] = useState()
    const handleRateValue = e => setSelected(e.target.id)
    const sendFeedback = async () => {
        console.log(seleted, feedbackRef.current.value)
        const data = { rate: seleted, feedback: feedbackRef.current.value, username: user.username }
        const requestOption = {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(data),
        }
        if (seleted && feedbackRef.current.value) {
            fetch('http://127.0.0.1:8081/api/feedback', requestOption)

        }
        $('#myModal').modal('toggle');
    }

    const user = JSON.parse(localStorage.getItem('user'))
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
            <Navbar bg="light" expand="lg" style={{zIndex:"5"}}>
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
            <div className="row height d-flex justify-content-center align-items-center">
                <div className="col-md-8" id='e-search'>
                    <img src={logo} style={{width: "250px"}}></img>
                    <div className="search">
                        <i className="fa fa-search"></i>
                        <input ref={messageRef} type="text" className="form-control" placeholder="Nhập các triệu chứng, cách nhau bằng dấu ;" />
                        <button className="btn btn-primary" onClick={sendMessage}>Search</button>
                    </div>
                    <div>{responseMess || ""}</div>
                </div>
                <div id="vertical-button" style={{ textAlign: "right" }}>
                    <button type="button" className="btn btn-info" data-toggle="modal" data-target="#myModal2">Hướng dẫn</button>
                    <button type="button" className="btn btn-warning" data-toggle="modal" data-target="#myModal">Phản hồi</button>

                </div>
            </div>
            <div id="myModal" className="modal fade" role="dialog">
                <div className="modal-dialog modal-dialog-centered" role={'document'}>
                    <div className="modal-content">
                        <div className="modal-header">
                            <h4>Phản hồi</h4>
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div className="modal-body">
                            <div id="message" style={{ textAlign: 'center', color: "green" }}></div>
                            <textarea ref={feedbackRef} type="text" className="form-control mb-10"
                                placeholder="Đánh giá và phản hồi của bạn về hệ thống của chúng tôi"></textarea>
                        </div>
                        <div className="rating">
                            <input type="radio" name="rating" value="5" id="5" onClick={handleRateValue} /><label htmlFor="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4" onClick={handleRateValue} /><label htmlFor="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3" onClick={handleRateValue} /><label htmlFor="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2" onClick={handleRateValue} /><label htmlFor="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1" onClick={handleRateValue} /><label htmlFor="1">☆</label>
                        </div>
                        <div className="modal-footer">
                            <button className="btn btn-out btn-primary btn-square" onClick={sendFeedback}>Send</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="myModal2" className='modal fade' role='dialog'>
                <div className="modal-dialog modal-xl" role={'document'}>
                    <div className="modal-content">
                        <div className="modal-header">
                            <h4>Hướng dẫn</h4>
                            <button type="button" className="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div className="modal-body">
                            <div>
                                Chào mừng bạn đã đến với Hệ thống tư vấn chăm sóc sức khoẻ. Hệ thống được phát triển dựa trên ý tưởng đưa ra chẩn đoán và lời khuyên dựa vào các triệu chứng do bạn cung cấp mà không
                                cần đến bác sỹ. Dưới đây là hướng dẫn sử dụng hệ thống, vui lòng đọc kỹ trước khi sử dụng.
                                <br/>
                                <img id='imageTutorial' src={tutorial}></img>
                                <b>1. Chẩn đoán</b>
                                <br/>
                                Chức năng chính của hệ thống là đưa ra chẩn đoán và lời khuyên dựa vào các triệu chứng mà bạn gặp phải.
                                Hãy nhập các triệu chứng vào ô tìm kiếm, mỗi triệu chứng cách nhau một dấu chấm phẩy ';'. Ví dụ khi bạn gặp phải các triệu chứng: ho, sốt cao, đau cơ bắp....
                                Khi này hãy nhập vào ô tìm kiếm với nội dung: ho; sốt cao; đau cơ bắp;... rồi ấn nút Search để hệ thống đưa ra chẩn đoán và lời khuyên
                                Nội dung chẩn đoán và lời khuyên dành cho bạn sẽ được hiển thị ngay dưới thanh tìm kiếm. Hãy tham khảo các từ khoá ở phần 5 để biết nên nhập các triệu trứng của bạn vào như thế nào.
                                <br/>
                                <b>2. Lịch sử </b>
                                <br/>
                                Lịch sử tìm kiếm và chẩn đoán của bạn sẽ được lưu lại ở phần số 2 này. Với phần này, bạn có thể dễ dàng xem lại những lần chẩn đoán trước mà bạn đã nhận được.
                                <br/>
                                <b>3. Phản hồi</b>
                                <br/>
                                Nếu có bất kì đóng góp nào trong hệ thống, hãy gửi phản hồi và đánh giá của bạn để chúng tôi tiếp tục phát triển và hoàn thiện hệ thống, hướng đến trải nghiệm tốt nhất đến người dùng
                                <br/>
                                <b>4. Hướng dẫn</b>
                                <br/>
                                Đây là phần hướng dẫn sử dụng hệ thống, vui lòng đọc kĩ trước khi sử dụng để có trải nghiệm tốt nhất.
                                <br/>
                                <b>5. Các từ khoá triệu chứng tham khảo</b>
                                <br/>
                                Sau đây là những từ khoá bạn có thể tham khảo để nhập vào thanh tìm kiếm để hệ thống cho ra kết quả chẩn đoán tốt nhất:
                                Cảm thấy khó chịu; đau đầu; đau phía sau mắt; ho; sốt cao; buồn nôn; chóng mặt, loạng choạng;...
                            </div>
                        </div>
                        <div className="rating">
                        </div>
                        <div className="modal-footer">
                            <h5>Đọc kĩ hướng dẫn trước khi sử dụng</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}


export default Search;
