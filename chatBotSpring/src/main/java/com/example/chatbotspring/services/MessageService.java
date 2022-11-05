package com.example.chatbotspring.services;

import com.example.chatbotspring.data.dto.MessageRequest;
import com.example.chatbotspring.data.entities.*;
import com.example.chatbotspring.data.repository.*;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;

import java.util.*;

@Service
@AllArgsConstructor
public class MessageService {

    private final SymptomRepository symptomRepository;
    private final RecommendationRepository recommendationRepository;
    private MedicalHistoryRepository medicalHistoryRepository;
    public String solveMessage(MessageRequest message) {
        return tuVanVanDe(message);
    }

    // thuat toan
    private String tuVanVanDe(MessageRequest message) {
        String[] symptoms = message.getMessage().split(";");
        List<Symptom> symptomList = new ArrayList<>();
        for (String symptom : symptoms) {
            symptomList.addAll(symptomRepository.findBySymptomName(symptom.trim()));
        }

        Map<String, Integer> map = new HashMap<>();
        int maxWeight = 0;
        String diseaseName = "";
        for (Symptom symptom : symptomList) {
            // đưa tên bệnh vào trong map nếu chưa có trong map
            if (map.get(symptom.getDiseaseName()) == null) {
                map.put(symptom.getDiseaseName(), 0);
            }
            // lấy trọng số của triệu chứng
            Integer weight = map.get(symptom.getDiseaseName());
            // cộng dồn trọng số khi bệnh đã có trong map
            map.put(symptom.getDiseaseName(), weight + symptom.getWeight());

            if (map.get(symptom.getDiseaseName()) > maxWeight) {
                maxWeight = map.get(symptom.getDiseaseName());
                diseaseName = symptom.getDiseaseName();
            }
        }
        if (diseaseName.isEmpty())
            return "Không thể tư vấn từ các triệu chứng trên";

        StringBuilder result = new StringBuilder("Từ các triệu chứng bạn gặp phải, chúng tôi chẩn đoán bạn đang bị: ");
        result.append(diseaseName.toLowerCase()).append(". Lời khuyên: ");
        List<Recommendation> recommendationList = recommendationRepository.findByDiseaseName(diseaseName);

        for (Recommendation recommendation : recommendationList) {
            result.append("\n- ").append(recommendation.getRecommendation());
        }

        Date date = new Date();
        MedicalHistory medicalHistory = new MedicalHistory();
        medicalHistory.setDateTime(date);
        medicalHistory.setSymptoms(message.getMessage());
        medicalHistory.setDiseaseName(diseaseName);
        medicalHistory.setUsername(message.getContext());

        medicalHistoryRepository.save(medicalHistory);

        return result.toString();
    }
}
