package com.example.chatbotspring.controllers;

import com.example.chatbotspring.data.dto.MessageRequest;
import com.example.chatbotspring.data.dto.MessageResponse;
import com.example.chatbotspring.data.entities.FeedbackRated;
import com.example.chatbotspring.data.entities.Symptom;
import com.example.chatbotspring.data.repository.FeedbackRatedRepository;
import com.example.chatbotspring.data.repository.SymptomRepository;
import com.example.chatbotspring.services.MessageService;
import lombok.AllArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/api")
@CrossOrigin("*")
@AllArgsConstructor
public class MessageController {

    private final MessageService messageService;

    FeedbackRatedRepository feedbackRatedRepository;
    SymptomRepository symptomRepository;

    @PostMapping(path = "/sendMessage")
    public ResponseEntity<String> sendMessage(@RequestBody MessageRequest message) {
        System.out.println(message.getMessage());
        return ResponseEntity.ok(messageService.solveMessage(message));
    }

    @PostMapping("feedback")
    public ResponseEntity<?> sendFeedback(@RequestBody FeedbackRated feedbackRated){
        feedbackRatedRepository.save(feedbackRated);
        return ResponseEntity.ok("Gui phan hoi thanh cong!");
    }

}