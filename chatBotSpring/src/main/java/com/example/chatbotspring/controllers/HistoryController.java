package com.example.chatbotspring.controllers;

import com.example.chatbotspring.data.dto.MessageRequest;
import com.example.chatbotspring.data.entities.MedicalHistory;
import com.example.chatbotspring.data.repository.MedicalHistoryRepository;
import lombok.AllArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api")
@CrossOrigin("*")
@AllArgsConstructor
public class HistoryController {
    private MedicalHistoryRepository medicalHistoryRepository;

    @PostMapping("/history")
    private ResponseEntity<List<MedicalHistory>> getHistory(@RequestBody MessageRequest message){
        System.out.println("lịch sử chần đoán của " + message.getMessage());
        return ResponseEntity.ok(medicalHistoryRepository.findAllByUsername(message.getMessage()));
    }

    @DeleteMapping("/deletehistory")
    private ResponseEntity<?> deteleHistory(@RequestBody MessageRequest history) {
        Long id = Long.parseLong(history.getContext());
        medicalHistoryRepository.deleteById(id);
        return ResponseEntity.ok("Xoá lịch sử thành công");
    }
}
